<section class="user">
    <div class="container">
        <h2>Profil</h2>
        <h3>Bienvenue <?= isset($_SESSION['login']) ? $_SESSION['login'] : "" ?></h3>
        <div class="form">
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Prénom</label>
                        <input class="form-control" type="text" name="" id="" required value="<?= $_SESSION['login'] ? $_SESSION['login'] : "" ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="">Nom de famille</label>
                        <input class="form-control" type="text" name="" id="" value="<?= $_SESSION['login'] ? $_SESSION['login'] : "" ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">E-mail</label>
                        <input class="form-control" type="email" name="" value="email@gmail.com" id="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">role</label>
                        <input class="form-control" type="text" name="" id="" value="<?= $_SESSION['role'] ? $_SESSION['role'] : "" ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Date de naissance</label>
                        <input class="form-control" type="date" name="" id="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Pays</label>
                        <input class="form-control" type="text" name="" id="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Ville</label>
                        <input class="form-control" type="text" name="" id="" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Genre</label>
                        <select class="form-control">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="submit_btn" value="Enregistrer">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>