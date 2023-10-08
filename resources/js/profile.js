// untuk DOM di ubah kata sandi
document.addEventListener('DOMContentLoaded', function() {
    const ubahPasswordForm = document.getElementById('ubahPassword');
    const editProfileForm = document.getElementById('form_edit_profile');
    const ubahPasswordButton = document.getElementById('profile-change-password');
    const submitEditProfileButton = document.getElementById('submitEditProfile');
    const cancelButton = document.getElementById('cancelButton2');

    ubahPasswordButton.addEventListener('click', function() {
        ubahPasswordForm.style.display = 'block';
        editProfileForm.style.display = 'none';
        ubahPasswordButton.style.display = 'none';
        submitEditProfileButton.style.display = 'none';
    });

    cancelButton.addEventListener('click', function() {
        ubahPasswordForm.style.display = 'none';
        editProfileForm.style.display = 'block';
        ubahPasswordButton.style.display = 'block';
        submitEditProfileButton.style.display = 'block';
    });
});