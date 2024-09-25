<script>
  $(document).ready(function() {
    // When brand is selected
    $('#brand-select').change(function() {
      var brand_id = $(this).val();

      // Fetch models using AJAX
      $.ajax({
        url: 'get_car_data.php',
        type: 'POST',
        data: {
          type: 'getModels',
          brand_id: brand_id
        },
        success: function(response) {
          var models = JSON.parse(response);
          var modelSelect = $('#model-select');
          modelSelect.empty(); // Clear previous models

          if (models.length > 0) {
            modelSelect.append('<option value="" disabled selected>Select Model</option>');
            $.each(models, function(index, model) {
              modelSelect.append('<option value="' + model.model_id + '">' + model.model_name +
                '</option>');
            });
          } else {
            modelSelect.append('<option value="" disabled>No models found</option>');
          }

          // Clear generations since model has changed
          $('#generation-select').html('<option value="" disabled selected>Select Generation</option>');
        }
      });
    });

    // When model is selected
    $('#model-select').change(function() {
      var model_id = $(this).val();

      // Fetch generations using AJAX
      $.ajax({
        url: 'get_car_data.php',
        type: 'POST',
        data: {
          type: 'getGenerations',
          model_id: model_id
        },
        success: function(response) {
          var generations = JSON.parse(response);
          var generationSelect = $('#generation-select');
          generationSelect.empty(); // Clear previous generations

          if (generations.length > 0) {
            generationSelect.append('<option value="" disabled selected>Select Generation</option>');
            $.each(generations, function(index, generation) {
              generationSelect.append('<option value="' + generation.generation_id + '">' +
                generation.generation_name + '</option>');
            });
          } else {
            generationSelect.append('<option value="" disabled>No generations found</option>');
          }
        }
      });
    });
  });
</script>
