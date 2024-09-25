<?php
$title = "DTC";
include "includes/head.php";
?>
<?php
include 'config/dbconn.php';
// Fetch brands from the database
$brand_query = "SELECT * FROM brands";
$brand_query_run = mysqli_query($con, $brand_query);

if (mysqli_num_rows($brand_query_run) > 0) {
  while ($row = mysqli_fetch_assoc($brand_query_run)) {
    $brands[] = $row;
  }
}
?>

<body>
  <?php include "includes/navbar.php"; ?>
  <main>
    <section class="dtc-sec">
      <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-10">
            <form action="" class="dtc-form">
              <h3 class="sec-heading">Search By Code</h3>
              <div class="row mt-4 align-items-end">
                <div class="col-6 col-md-4">
                  <div class="form-group">
                    <label for="make">Select Make:</label>
                    <select name="make" class="srch-slct">
                      <option value="Select Make" disabled selected>Select Make</option>
                      <?php
                      foreach ($brands as $brand) {
                        echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="form-group">
                    <label for="make">Code:</label>
                    <input type="text" class="form-control" placeholder="Example: P3400">
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <button class="main-btn btn">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <table class="table table-lg table-borderless dtc-table table-hover">
              <thead>
                <tr class="heading">
                  <th colspan="6">
                    <h3 class="sec-heading">Recent Searches</h3>
                  </th>
                </tr>
                <tr>
                  <th scope="col" class="ps-3">ODB/DTC Code</th>
                  <th scope="col">Type</th>
                  <th scope="col">System</th>
                  <th scope="col">System Name</th>
                  <th scope="col">Module</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody>
                <!-- <tr>
                                <td class="ps-3"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> -->
                <tr>
                  <td colspan="6" class="text-center">No results found.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>


  <?php include "includes/footer.php"; ?>
  <script>
  function create_custom_dropdowns() {
    $('.srch-slct').each(function(i, select) {
      if (!$(this).next().hasClass('dropdown-select')) {
        $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') +
          '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
        var dropdown = $(this).next();
        var options = $(select).find('option');
        var selected = $(this).find('option:selected');
        dropdown.find('.current').html(selected.data('display-text') || selected.text());
        options.each(function(j, o) {
          var display = $(o).data('display-text') || '';
          dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') +
            '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
        });
      }
    });

    $('.dropdown-select ul').before(
      '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox form-control w-100" type="text"></div>'
    );
  }

  // Event listeners

  // Open/close
  $(document).on('click', '.dropdown-select', function(event) {
    if ($(event.target).hasClass('dd-searchbox')) {
      return;
    }
    $('.dropdown-select').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
      $(this).find('.option').attr('tabindex', 0);
      $(this).find('.selected').focus();
    } else {
      $(this).find('.option').removeAttr('tabindex');
      $(this).focus();
    }
  });

  // Close when clicking outside
  $(document).on('click', function(event) {
    if ($(event.target).closest('.dropdown-select').length === 0) {
      $('.dropdown-select').removeClass('open');
      $('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
  });

  function filter() {
    var valThis = $('#txtSearchValue').val();
    $('.dropdown-select ul > li').each(function() {
      var text = $(this).text();
      (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
    });
  };
  // Search

  // Option click
  $(document).on('click', '.dropdown-select .option', function(event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown-select').find('.current').text(text);
    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
  });

  // Keyboard events
  $(document).on('keydown', '.dropdown-select', function(event) {
    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
    // Space or Enter
    //if (event.keyCode == 32 || event.keyCode == 13) {
    if (event.keyCode == 13) {
      if ($(this).hasClass('open')) {
        focused_option.trigger('click');
      } else {
        $(this).trigger('click');
      }
      return false;
      // Down
    } else if (event.keyCode == 40) {
      if (!$(this).hasClass('open')) {
        $(this).trigger('click');
      } else {
        focused_option.next().focus();
      }
      return false;
      // Up
    } else if (event.keyCode == 38) {
      if (!$(this).hasClass('open')) {
        $(this).trigger('click');
      } else {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
        focused_option.prev().focus();
      }
      return false;
      // Esc
    } else if (event.keyCode == 27) {
      if ($(this).hasClass('open')) {
        $(this).trigger('click');
      }
      return false;
    }
  });

  $(document).ready(function() {
    create_custom_dropdowns();
  });
  </script>