<div class="text-center">
    <h1 class="my-4 text-capitalize"><?= $form_title; ?></h1>
    <div class="border border-dark px-5 pt-5">
        <form action="<?= $form_submit; ?>" method="post">
            <div>
                <input class="w-100 py-2" type="text" name="email" placeholder="Enter email" required />
            </div>
            <div class="my-5">
                <input class="w-100 py-2" type="password" name="password" placeholder="Enter password" required />
            </div>
            <button class="w-100 btn btn-success text-capitalize" type="submit"><?= $form_title; ?></button>
        </form>
        <hr />
        <a href="<?= $form_href; ?>"><?= $form_href_text; ?></a>
    </div>
</div>