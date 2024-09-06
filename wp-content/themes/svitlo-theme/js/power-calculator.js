jQuery(document).ready(function($) {
    $('#power-calculator-form').on('submit', function(e) {
        e.preventDefault();

        var deviceCategory = $('#device-category').val();
        var devicePower = parseFloat($('#device-power').val());
        var deviceQuantity = parseInt($('#device-quantity').val());
        var usageTime = parseFloat($('#usage-time').val());

        if (isNaN(devicePower) || isNaN(deviceQuantity) || isNaN(usageTime)) {
            $('#results').html('<p>Please enter valid numbers for all fields.</p>');
            return;
        }

        var totalPower = devicePower * deviceQuantity * usageTime;
        var resultHtml = '<p>Total Power Consumption: ' + totalPower + ' Wh</p>';

        $('#results').html(resultHtml);
    });
});
