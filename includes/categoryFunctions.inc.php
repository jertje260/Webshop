<?php
    function showCategoryBoxStart($category)
    {
        echo("<div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                <h3 class=\"panel-title\">".$category->get('name')."</h3>
                </div>
                <div class=\"panel-body\">");
    }
    
    function showCategoryBoxEnd()
    {
        echo("</div>
                </div>");
    }

    function showCategory($category)
    {
        echo $category->get('name') . ", " . $category->get('description') . " <a href=\"index.php?page=cms&amp;cmsid=2&amp;category=".$category->get('id')."\">edit Category</a></br>";
    }

    function editCategory($category)
    {
        echo("
            <form role=\"form\" method=\"post\" action=\"index.php?page=cms&amp;cmsid=2\" name=\"editcategory\">
                <input type=\"hidden\" name=\"id\" value=\"" . $category->get('id') . "\">
                <div class=\"form-group\">
                    <label for=\"category_edit_name\">Name</label>
                    <input id=\"category_edit_name\" class=\"form-control\" name=\"name\" type=\"text\" value=\"" . $category->get('name') . "\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"category_edit_name\">Description</label>
                    <input id=\"category_edit_name\" value=\"" . $category->get('description') . "\" class=\"form-control\" type=\"text\" name=\"description\" required>
                </div>
                <button type=\"button\" class=\"btn btn-lg btn-default\" onclick=\"window.location.href='index.php?page=cms&amp;cmsid=2'\">Back to all Categories</button>
                <button type=\"submit\" class=\"btn btn-lg btn-default\" name=\"editcategory\" value=\"Edit Category\">Save changes</button>
            </form>
        ");
    }

    function addNewCategory()
    {
         echo("
            <form role=\"form\" method=\"post\" action=\"index.php?page=cms&amp;cmsid=2\" name=\"newcategory\">
                <div class=\"form-group\">
                    <label for=\"category_new_name\">Name</label>
                    <input id=\"category_new_name\" class=\"form-control\" placeholder=\"Put here the category name\" name=\"name\" type=\"text\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"category_new_name\">Description</label>
                    <input id=\"category_new_name\" class=\"form-control\" type=\"text\" placeholder=\"Put here the category description\"name=\"description\" required>
                </div>
                <button type=\"button\" class=\"btn btn-lg btn-default\" onclick=\"window.location.href='index.php?page=cms&amp;cmsid=2'\">Back to all Categories</button>
                <button type=\"submit\" class=\"btn btn-lg btn-default\" name=\"newcategory\" value=\"New Category\">Add Category</button>
            </form>
        ");       
    }
?>
