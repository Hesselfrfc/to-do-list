<form style="justify-content: center;" class="needs-validation container" validate method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div>
        <label for="listName">Naam:</label>
            <? if(empty($fieldValues["listName"])) {?>
                <input class="form-control" type="text" id="listName" name="listName" placeholder="Naam" required>
                <div class="invalid-feedback">Kies de naam van de list.</div>
            <? }else { ?>
                <input class="form-control" type="text" id="listName" name="listName" placeholder="Naam" value="<?=$fieldValues["listName"]?>" required>
                <div class="invalid-feedback">Kies de naam van de list.</div>
            <? } ?>
    </div>
    <button type="submit" class="btn btn-primary"><?=$buttonText?></button>
</form>