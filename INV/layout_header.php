<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title><?php echo $page_title; ?></title>
  
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   
    <!-- our custom CSS -->
    <link rel="stylesheet" href="libs/css/custom.css" />
   
</head>
<body>
  
    <!-- container -->
    <div id="navbar"><?php if(basename($_SERVER['PHP_SELF']) == "index.php"){
        
        //SEARCH
        echo "<form role='search' action='search.php' class='search-nav'>";
        echo "<div class='input-group col-md-3 pull-left margin-right-1em'>";
                $search_value=isset($search_term) ? "value='{$search_term}'" : "";
                echo "<input type='text' class='form-control' placeholder='Type product name or description...' name='s' id='srch-term' autocomplete='off' required {$search_value} />";
                echo "<div class='input-group-btn'>";
                    echo "<button class='btn btn-primary' type='submit'><i class='glyphicon glyphicon-search'></i></button>";
                echo "</div>";
            echo "</div>";
        echo "</form>";

        // echo "<h2 id='main-head' >Inventory Management.</h2>"; //add logo?

        //CREATE PRODUCT
        echo "<div class='right-button-margin'>";
        echo "<a href='create_product.php' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-plus'></span> Create Product";
        echo "</a>";
        echo "</div>";

    }else{echo "<a href='index.php'><i class='glyphicon glyphicon-menu-left'></i> Back</a>";} ?> 
    

    </div>
    <div class="container">
  
        <?php
        $total_rows=$product->countAll();

        echo "<div class='headDiv'>";
        // show page header
        echo "<div class='pagehead'>
                <h2 id='pgTitle'>{$page_title}</h2>
            </div>";
            if(basename($_SERVER['PHP_SELF'])== 'index.php'){
                echo    "<div class='totalC'> <P> Total number of Items : $total_rows </P></div>";
            }
        echo "</div>";
        ?>