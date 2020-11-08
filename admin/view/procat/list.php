<section id="main-content">
    <section class="wrapper">



        <table class="table table-striped border-top" id="sample_1">
            <thead>
            <tr>

                <th>شمارنده</th>
                <th style="width: 900px" class="hidden-phone"> عنوان دسته بندی</th>
                <th style="width: 900px" class="hidden-phone"> سر گروه</th>
                <th style="width: 100px" class="hidden-phone"></th>
                <th style="width: 100px" class="hidden-phone"></th>
                <th style="width: 100px" class="hidden-phone" ></th>

            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($procat as $value):
            ?>
            <tr class="odd gradeX">
                <td><?php echo $value['id']; ?></td>
                <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com"><?php echo $value['title']; ?></a></td>
                <td class="hidden-phone">
                    <?php
                    if ($value['chid']==0){
                        echo "ندارد";
                    }
                    else{
                        $parent=$class->select_parent_procat($value['chid']);
                        echo $parent;
                    }
                    ?>
                </td>
                <td class="hidden-phone"><a href="#" class="label label-warning">نمایش</a></td>
                <td class="hidden-phone"><a href="index.php?c=procat&a=edit&id=<?php echo $value['id']; ?>" class="label label-success">ویرایش</a></td>
                <td class="hidden-phone"><a href="index.php?c=procat&a=delete&id=<?php echo $value['id']; ?>" class="label label-danger">حذف</a></td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </section>
</section>