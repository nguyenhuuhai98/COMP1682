<?php
function handleCategory($categories, $str = ' ')
{
    foreach ($categories as $category) {
        if ($category['parent_id'] == 0) {
            echo "<optgroup label='$category[name]'>";
            multilevelCategory($categories, $category['id'], $str);
            echo '</optgroup>';
        }
    }
}

function multilevelCategory($categories, $parentId, $str)
{
    foreach ($categories as $category) {
        if ($category['parent_id'] == $parentId) {
            echo "<option value='$category[id]'>$str $category[name]</option>";
            multilevelCategory($categories, $category['id'], $str . '- - ');
        }
    }
}
