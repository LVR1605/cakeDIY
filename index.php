<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakey</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <h1 class="m-5 text-3xl">Cake D.I.Y.</h1>
    <table class="min-w-full border-black border-2">
        <thead class="border-2 border-black">
            <tr>
                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Cake Shape
                </th>
                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Cake Flavor
                </th>
                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Cake Toppings
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <fieldset>
            
                        <div id="cakeShapeOptions">
                        </div>
                    </fieldset>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <fieldset>
                        <div id="cakeFlavorOptions">
                        </div>
                    </fieldset>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <fieldset>
                        <div id="cakeToppingsOptions">
                        </div>
                    </fieldset>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    // Arrays for cake options
    const cakeShapes = ["Heart shape", "Rectangle shape", "Square shape", "Round shape"];
    const cakeFlavors = ["Chocolate", "Vanilla", "Lemon", "Cheesecake"];
    const cakeToppings = ["Cookies", "Spun-Sugar Flowers", "Mini Chocolate Candies", "Marshmallows",];

    // Function to generate radio buttons for options
    function generateRadioOptions(containerId, options) {
        const container = document.getElementById(containerId);

        options.forEach(option => {
            const label = document.createElement("label");
            label.className = "block my-2";

            const radio = document.createElement("input");
            radio.type = "radio";
            radio.className = "form-radio";
            radio.name = containerId;
            radio.value = option;

            const span = document.createElement("span");
            span.className = "ml-2";
            span.textContent = option;

            label.appendChild(radio);
            label.appendChild(span);

            container.appendChild(label);
        });
    }

    // Generate radio options for Cake Shape, Cake Flavor, and Cake Toppings
    generateRadioOptions("cakeShapeOptions", cakeShapes);
    generateRadioOptions("cakeFlavorOptions", cakeFlavors);
    generateRadioOptions("cakeToppingsOptions", cakeToppings);
</script>
</body>
</html>
