<!-- Assessment Task Question
1. Create Product CRUD Operation with the following Fields:
       a. Product Name: Text input field.
       b. Product Image: File upload field (required).
       c. SKU: Text input field (required and unique).
       d. Price: Number input field (required) with validation for pricing.
       e. Brand: Dropdown selection field.
       f. Manufacture Date: Date input field, restricting past dates.
       g. Available Stock: Number input field, accepting numeric values including 0, and allowing nullable entries.
2. List Page Details:
       a. Display Fields: The list page should display the following details for each product: Name, Product Images (sized at 75px*75px), Price, Brand, and SKU.
       b. Warning Color for Low Stock: If the available stock is less than 10, the corresponding product row should be displayed in a warning color.
3. The entire implementation will follow the MVC architectural pattern, separating the application into Model, View, and Controller components to ensure a clear and organized structure.
4. Evaluation Criteria for Evolution:
          a. MVC Architecture: Adherence to the MVC pattern and proper separation of concerns between the Model, View, and Controller components.
          b. Optimized and Standardized Code: Implementing clean, efficient, and standardized coding practices.
          c. Validation: Implementing proper validation mechanisms for input fields, including validation for pricing, date restrictions, and required fields.
          d. Design: Ensuring a well-designed user interface and user experience, considering aesthetics and usability. -->

<?php

require 'router.php';


$router = new Router();


$router->get('/','view');

$router->post('/store','create');

$router->post('/edit','edit');

$router->get('/list','list');

$router->put('/update','update');

$router->delete('/delete','delete');

$router->routes($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);

