<form id="askbongo-form">
    <input type="text" id='fullname' name="firstname" class="txt" placeholder="<?= isset($yourFullname) ? $yourFullname : 'Enter your full name'?>" required>
    <input type="text" id='location' name="location" class="txt" placeholder="<?= isset($yourTown) ? $yourTown : 'Your town'?>" required>

    <p id='require'><?= isset($required) ? $required : "Please fill in every field"?></p>
    <p style="font-weight:lighter;"><?= isset($smsOpen) ? $smsOpen : "Your SMS app will open automatically"?></p>
    <div id='redirect'><?= isset($buttonTitle) ? $buttonTitle : "FIND OUT NOW"?></div>
</form>