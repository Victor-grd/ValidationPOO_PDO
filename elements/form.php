
<div class="content_form">
    <div class="card border-dark form">
    <div class="card-header">Header</div>
    <div class="card-body">
            <form method="post" action="./CRUD/addCharacter.php">
                <fieldset>
                    <div class="form-group">
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Default input" id="inputDefault" required>
                        </div>

                        <label for="select_role">Select your role</label>
                        <select class="form-control" name="role" id="select_role">
                            <?php foreach (Character::getRoles() as $key => $role) : ?>
                                <option data-image="<?=$role['role']?>" value="<?=$role['id']?>"><?=$role['role']?></option>
                            <?php endforeach ?>
                        </select>

                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Health</label>
                            <input type="number" name="health" class="form-control" placeholder="Default input" id="inputDefault" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Strength</label>
                            <input type="number" name="strength" class="form-control" placeholder="Default input" id="inputDefault" required>
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </fieldset>
            </form>
    </div>
    </div>
</div>
