<section class="user">
    <div class="container">
        <h2>Connexion</h2>
        <div class="errors"><?= isset($_SESSION['errors']) ? $_SESSION['errors'] : "" ?></div>
        <div class="form">
            <form action="<?= URL ?>submit_login" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">login</label>
                        <input class="form-control" type="text" name="login" id="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">password</label>
                        <input class="form-control" type="password" name="password" id="" required>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="submit_btn" value="Enregistrer">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>