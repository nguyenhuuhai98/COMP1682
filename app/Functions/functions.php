<?php

function multilevelMenu($categories, $parentId)
{
    foreach ($categories as $category) {
        if ($category->parent_id == $parentId) {
            echo "<li class='dropdown'>";
            echo "<a href='#'' class='dropdown-padding' data-toggle='dropdown' role='button' aria-expanded='false'>$category->name <span class='caret'></span></a>";
            echo "<ul class='dropdown-menu' role='menu'>";
            multilevelMenu($categories, $category->id);
            echo "</ul>";
            echo "</li>";
        }
    }
}
?>
