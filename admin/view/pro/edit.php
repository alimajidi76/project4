<section id="main-content">
    <section class="wrapper">
        <form action="index.php?c=pro&a=edit&id=<?php echo $results['id']; ?>" method="post" class="form-horizontal tasi-form" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-lg-2 control-label">عنوان </label>
                <div class="col-lg-10">
                    <input value="<?php  echo $results['title']; ?>" type="text" class="form-control" name="frm[title]">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">توضیحات </label>
                <div class="col-lg-10">
                    <textarea name="frm[text]"><?php echo $results['text']; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">تصویر اول</label>
                <div class="col-lg-10">
                    <input type="file" class="form-control" name="image1">
                    <img src="<?php echo $results['image1']; ?>" alt="" width="80">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">تصویر دوم </label>
                <div class="col-lg-10">
                    <input type="file" class="form-control" name="image2">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">تصویر سوم </label>
                <div class="col-lg-10">
                    <input type="file" class="form-control" name="image3">
                </div>
            </div>



            <div class="form-group">
                <label class="col-lg-2 control-label"> دسته بندی </label>
                <div class="col-lg-10">
                    <select class="form-control m-bot15" name="frm[cat_id]">
                        <?php foreach ($res as $val): ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">تعداد موجودی </label>
                <div class="col-lg-10">
                    <input value="<?php echo $results['count']; ?> " type="text" class="form-control" name="frm[count]">
                </div>
            </div>


            <div class="form-group">
                <label class="col-lg-2 control-label">قیمت </label>
                <div class="col-lg-10">
                    <input value="<?php echo $results['price']; ?> " type="text" class="form-control" name="frm[price]">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">قیمت قبلی </label>
                <div class="col-lg-10">
                    <input value="<?php echo $results['off_price']; ?> " type="text" class="form-control" name="frm[off_price]">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">امتیاز محصول </label>
                <div class="col-lg-10">
                    <input value="<?php echo $results['rate']; ?>" type="text" class="form-control" name="frm[rate]">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-10">
                    <input type="submit" value="ثبت" class="btn btn-xs btn-success" />
                </div>
            </div>

        </form>
    </section>
</section>
