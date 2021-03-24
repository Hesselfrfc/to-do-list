<?

?>

<form style="justify-content: center;" class="needs-validation container col-md-10" validate method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div>
        <label for="name">Naam:</label>
            <? if(empty($fieldValues["name"])) {?>
                <input class="form-control" type="text" id="name" name="name" placeholder="Naam" required>
                <div class="invalid-feedback">Kies de naam van de employee.</div>
            <? }else { ?>
                <input class="form-control" type="text" id="name" name="name" placeholder="Naam" value="<?=$fieldValues["name"]?>" required>
                <div class="invalid-feedback">Kies de naam van de employee.</div>
            <? } ?>
    </div>
    <div>
        <label for="description">Omschrijving:</label>
            <? if(empty($fieldValues["description"])) {?>
                <input class="form-control" type="text" id="description" name="description" placeholder="omschrijving" required>
                <div class="invalid-feedback">Vul de omschrijving in.</div>
            <? }else { ?>
                <input class="form-control" type="text" id="description" name="description" placeholder="omschrijving" value="<?=$fieldValues["description"]?>" required>
                <div class="invalid-feedback">Vul de omschrijving in.</div>
            <? } ?>
    </div>
    <div>
        <label for="time">tijd (in minuten):</label>
            <? if(empty($fieldValues["time"])) {?>
                <input class="form-control" type="text" id="time" name="time" placeholder="tijd" required>
                <div class="invalid-feedback">Vul de tijd in van de taak (in minuten).</div>
            <? }else { ?>
                <input class="form-control" type="text" id="time" name="time" placeholder="tijd" value="<?=$fieldValues["time"]?>" required>
                <div class="invalid-feedback">Vul de tijd in van de taak (in minuten).</div>
            <? } ?>
    </div>
    <div> 
        <label for="statusId"></label>
            <? if(empty($fieldValues["statusName"])) {?>
                <select placeholder="Kies een status" class="form-control" name="statusId" required>
                    <option value=""> Kies een status  </option>
                <? foreach ($list as $data) { ?>
                    <option value="<?= $data["id"];?>" > <?= $data["statusName"];?></option>
                <? } ?>
                </select>
                <div class="invalid-feedback">Kies een status.</div>
            <? }else { ?>
                <select placeholder="Kies een status" class="form-control" name="statusId" required>
                    <option value="<?= $data["id"];?>"> <?=$fieldValues["statusName"]?></option>
                <? foreach ($list as $data) { ?>
                    <option value="<?= $data["id"];?>" > <?= $data["statusName"];?></option>
                <? } ?>
                </select>
                <div class="invalid-feedback">Kies een status.</div>
            <? } ?>
    </div>
    <button type="submit" class="btn btn-primary"><?=$buttonText?></button>
</form>

        