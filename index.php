<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakey</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4 sm:p-8">
    <h1 class="text-3xl sm:text-4xl mb-4 sm:mb-8">Cake D.I.Y.</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border border-black">
            <thead class="border border-black">
                <tr>
                    <th class="px-4 sm:px-6 py-3 sm:py-4 bg-gray-200 text-left text-xs sm:text-sm leading-4 sm:leading-5 font-medium text-gray-600 uppercase tracking-wider">
                        Cake Shape
                    </th>
                    <th class="px-4 sm:px-6 py-3 sm:py-4 bg-gray-200 text-left text-xs sm:text-sm leading-4 sm:leading-5 font-medium text-gray-600 uppercase tracking-wider">
                        Cake Flavor
                    </th>
                    <th class="px-4 sm:px-6 py-3 sm:py-4 bg-gray-200 text-left text-xs sm:text-sm leading-4 sm:leading-5 font-medium text-gray-600 uppercase tracking-wider">
                        Cake Toppings
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 sm:px-6 py-4 whitespace-no-wrap">
                        <fieldset>
                            <legend class="sr-only">Cake Shape</legend>
                            <div id="cakeShapeOptions">
                                <?php
                                // Arrays for cake options
                                $cakeShapes = ["Heart shape", "Rectangle shape", "Square shape", "Round shape"];

                                // Generate radio options for Cake Shape using PHP
                                foreach ($cakeShapes as $option) {
                                    echo '<label class="block my-2">';
                                    echo '<input type="radio" class="form-radio" name="cakeShapeOptions" value="' . $option . '">';
                                    echo '<span class="ml-2 text-xs sm:text-sm">' . $option . '</span>';
                                    echo '</label>';
                                }
                                ?>
                            </div>
                        </fieldset>
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-no-wrap">
                        <fieldset>
                            <legend class="sr-only">Cake Flavor</legend>
                            <div id="cakeFlavorOptions">
                                <?php
                                // Arrays for cake options
                                $cakeFlavors = ["Chocolate", "Vanilla", "Lemon", "Cheesecake"];

                                // Generate radio options for Cake Flavor using PHP
                                foreach ($cakeFlavors as $option) {
                                    echo '<label class="block my-2">';
                                    echo '<input type="radio" class="form-radio" name="cakeFlavorOptions" value="' . $option . '">';
                                    echo '<span class="ml-2 text-xs sm:text-sm">' . $option . '</span>';
                                    echo '</label>';
                                }
                                ?>
                            </div>
                        </fieldset>
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-no-wrap">
                        <fieldset>
                            <legend class="sr-only">Cake Toppings</legend>
                            <div id="cakeToppingsOptions">
                                <?php
                                // Arrays for cake options
                                $cakeToppings = ["Cookies", "Spun-Sugar Flowers", "Mini Chocolate Candies", "Marshmallows"];

                                // Generate radio options for Cake Toppings using PHP
                                foreach ($cakeToppings as $option) {
                                    echo '<label class="block my-2">';
                                    echo '<input type="radio" class="form-radio" name="cakeToppingsOptions" value="' . $option . '">';
                                    echo '<span class="ml-2 text-xs sm:text-sm">' . $option . '</span>';
                                    echo '</label>';
                                }
                                ?>
                            </div>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
