<section id="main-content">
    <section class="wrapper">



        <table class="table table-striped border-top" id="sample_1">
            <thead>
            <tr>

                <th>شمارنده</th>
                <th style="width: 900px" class="hidden-phone"> عنوان </th>
                <th style="width: 900px" class="hidden-phone">تعداد</th>
                <th style="width: 900px" class="hidden-phone">قیمت</th>
                <th style="width: 900px" class="hidden-phone">تصویر</th>
                <th style="width: 100px" class="hidden-phone"></th>
                <th style="width: 100px" class="hidden-phone"></th>
                <th style="width: 100px" class="hidden-phone" ></th>

            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($pro as $value):
            ?>
            <tr class="odd gradeX">
                <td><?php echo $value['id']; ?></td>
                <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com"><?php echo $value['title']; ?></a></td>
                <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com"><?php echo $value['count']; ?></a></td>
                <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com"><?php echo $value['price']; ?></a></td>
                <td class="hidden-phone"><img src="<?php echo $value['image1']; ?>" alt="" width="60px"></td>
                <td class="hidden-phone"><a href="#" class="label label-warning">نمایش</a></td>
                <td class="hidden-phone"><a href="index.php?c=pro&a=edit&id=<?php echo $value['id']; ?>" class="label label-success">ویرایش</a></td>
                <td class="hidden-phone"><a href="index.php?c=pro&a=delete&id=<?php echo $value['id']; ?>" class="label label-danger">حذف</a></td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </section>
</section>