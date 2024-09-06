<?php
/*
Template Name: Power Calculator
*/
get_header();
?>

<div id="power-calculator">
    <h1>Power Calculator</h1>
    <form id="power-calculator-form">
        <div class="form-group">
            <label for="device-category">Device Category</label>
            <select id="device-category" name="device-category">
                <option value="communication">Communication</option>
                <option value="appliances">Appliances</option>
                <option value="comfort-lighting">Comfort & Lighting</option>
                <option value="entertainment-media">Entertainment & Media</option>
                <option value="tools">Tools</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="device-power">Device Power (W)</label>
            <input type="number" id="device-power" name="device-power" required>
        </div>
        <div class="form-group">
            <label for="device-quantity">Quantity</label>
            <input type="number" id="device-quantity" name="device-quantity" required>
        </div>
        <div class="form-group">
            <label for="usage-time">Usage Time (hours)</label>
            <input type="number" id="usage-time" name="usage-time" required>
        </div>
        <button type="submit">Calculate</button>
    </form>
    <div id="results"></div>
</div>

<?php
get_footer();
?>
