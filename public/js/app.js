// Function that adds a profile element
window.$ = jQuery;

  var cdnDatatableLanguage = "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json";
  
  jQuery.extend($.fn.dataTable.defaults, {
      responsive: true,
      language: { "url": cdnDatatableLanguage }
  });

function addProfile() {
  var divProfiles = $('<div>')
    .addClass('profile-item');

  var inputProfilesFr = $('<input>')
    .attr('type', 'text')
    .attr('name', 'profiles_fr[]')
    .attr('placeholder', 'Nom (Français)')
    .addClass('custom-form-control');

  var inputProfilesEn = $('<input>')
    .attr('type', 'text')
    .attr('name', 'profiles_en[]')
    .attr('placeholder', 'Nom (Anglais)')
    .addClass('custom-form-control');

  var buttonProfiles = $('<button>')
    .attr('type', 'button')
    .attr('id', 'remove-profile')
    .attr('onClick', 'removeProfile(this)')
    .text('Supprimer')
    .addClass('button-remove');

  divProfiles.append(inputProfilesFr, inputProfilesEn, buttonProfiles);

  $('#profiles-container').append(divProfiles);
}



// Function that adds a skill element
function addSkill() {
  var divSkills = $('<div>')
    .addClass('skill-item');

  var inputSkillsFr = $('<input>')
    .attr('type', 'text')
    .attr('name', 'skills_fr[]')
    .attr('placeholder', 'Nom (Français)')
    .addClass('custom-form-control');

  var inputSkillsEn = $('<input>')
    .attr('type', 'text')
    .attr('name', 'skills_en[]')
    .attr('placeholder', 'Nom (Anglais)')
    .addClass('custom-form-control');

  var buttonSkills = $('<button>')
    .attr('type', 'button')
    .attr('id', 'remove-skill')
    .attr('onClick', 'removeSkill(this)')
    .text('Supprimer')
    .addClass('button-remove');

  divSkills.append(inputSkillsFr, inputSkillsEn, buttonSkills);

  $('#skills-container').append(divSkills);
}

// Function that attaches the picture deletion event to the button-del-picture
function attachDeleteEventHandler(uuidId) {

  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
  });

  $.ajax({
    url:"/back789658/picture/"+uuidId,
    method: 'DELETE',
    success: function(response) {
      $("#coverHandleContainer").remove();
      $("#id_cover_uuid").val('');
    },
    error: function(xhr, status, error) {
      console.error(error);
    }
  });
}

// Function to go back
function cancelEvent(event) {
  if (event) {
    event.preventDefault();
  }
  if (confirm("Êtes-vous sûr de vouloir annuler vos modifications ?")) {
    // Retrieve URL from "data-url" attribute
    var url = document.getElementById('cancel-button').dataset.url;
    // Redirect to retrieved URL
    window.location.href = url;
  }
}

// Function that handles the local upload of the cover image
function handleCoverPictureUploadFromLocal(inputElement) {
  var file = $(inputElement).prop('files')[0];
  var uploadFormData = new FormData();
  uploadFormData.append('file', file);
  // Adding essential information to send the request
  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
  });

  // Remove the existing image in coverHandleContainer
  $('#coverUploadContainer').empty();

  // We add the essential information to the sending of the request
  $.ajax({
    url: '/back789658/article/uploadFromLocal',
    method: 'POST',
    data: uploadFormData,
    processData: false,
    contentType: false,
    // If the request pass
    success: function(response) {
      // Add picture id to the hidden field 'id_cover_uuid'
      var uuidId = response.uuid_id;
      $('#id_cover_uuid').val(uuidId);

      // Adding an <img> tag to each uploaded picture, which is added to the div 'coverHandleContainer'
      var imageUrl = response.image_url;
      var imageElement = $('<img>').attr('src', imageUrl).addClass('img_upload picture-import');
      var pictureContainer = $('<div>').addClass('picture-container');
      var pictureWrapper = $('<div>').addClass('picture-wrapper');
      var coverHandleContainer = $('<div>').attr('id', 'coverHandleContainer');
      pictureContainer.append(imageElement);

      var deleteButton = $('<button>').attr('type', 'button')
        .addClass('button-del-picture')
        .attr('hx-target', '#coverHandleContainer')
        .attr('onClick', 'attachDeleteEventHandler('+uuidId+')')
        .text('Supprimer l\'image');
      pictureContainer.append(deleteButton);

      pictureContainer.attr('id', 'pictureContainer');

      pictureWrapper.append(pictureContainer);
      coverHandleContainer.append(pictureWrapper);

      $('#coverUploadContainer').append(coverHandleContainer);
    },
    // If the request does not pass
    error: function(xhr, status, error) {
      // Display error message
      var errorMessage = 'L\'image n\'est pas prise en compte.';
      $('#coverUploadContainer').text(errorMessage);
      console.error(error);
    }
  });
}

// Function that handles the online upload of the cover image
function handleCoverPictureUploadFromUrl() {
  const url = document.getElementById('cover-picture-url').value;
  const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

  // Remove the existing image in coverHandleContainer
  $('#coverUploadContainer').empty();

  // Add essential information to send the request
  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': csrfToken }
  });

  // Prepare the FormData object
  const uploadFormData = new FormData();
  uploadFormData.append('cover-picture-url', url);

  // Send the request
  $.ajax({
    url: '/back789658/article/uploadFromUrl',
    method: 'POST',
    data: uploadFormData,
    processData: false,
    contentType: false,
    success: function(response) {
      // Add picture ID to the hidden field 'id_cover_uuid'
      var uuidId = response.uuid_id;
      $('#id_cover_uuid').val(uuidId);

      // Create the image element
      var imageUrl = response.image_url;
      var imageElement = $('<img>').attr('src', imageUrl).addClass('img_upload picture-import');

      // Create the picture container
      var pictureContainer = $('<div>').addClass('picture-container');
      var pictureWrapper = $('<div>').addClass('picture-wrapper');
      var coverHandleContainer = $('<div>').attr('id', 'coverHandleContainer');
      pictureContainer.append(imageElement);

      // Create the delete button
      var deleteButton = $('<button>')
        .attr('type', 'button')
        .addClass('button-del-picture')
        .attr('hx-target', '#coverHandleContainer')
        .attr('onClick', 'attachDeleteEventHandler('+uuidId+')')
        .text('Supprimer l\'image');

      // Append the delete button to the picture container
      pictureContainer.append(deleteButton);

      // Set the ID for the picture container
      pictureContainer.attr('id', 'pictureContainer');
      pictureWrapper.append(pictureContainer);
      // Append the picture wrapper to the coverHandleContainer
      coverHandleContainer.append(pictureWrapper);

      $('#coverUploadContainer').append(coverHandleContainer);
    },
    error: function(xhr, status, error) {
      console.error(error);
    }
  });
}

// Function that handles the upload of the content pictures
function handleSectionPictureUpload(file, success, failure) {
  var uploadFormData = new FormData();
  uploadFormData.append('file', file);

  // Ajouter les informations essentielles pour envoyer la requête
  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
  });

  // Ajouter les informations essentielles à l'envoi de la requête
  $.ajax({
    url: '/back789658/article/uploadFromLocal',
    method: 'POST',
    data: uploadFormData,
    processData: false,
    contentType: false,
    success: function(response) {
      // Traitement du succès de la requête et appel de la fonction de succès de TinyMCE
      var uuidId = response.uuid_id;
      var currentUuidId = $('#id_contents_uuids').val();
      var newUuidId = currentUuidId !== '' ? currentUuidId + ',' + uuidId : uuidId;
      $('#id_contents_uuids').val(newUuidId);

      var imageUrl = response.image_url;
      success(imageUrl);
    },
    error: function(xhr, status, error) {
      // Traitement de l'échec de la requête et appel de la fonction d'échec de TinyMCE
      console.error(error);
      failure('Erreur lors du téléchargement de l\'image');
    }
  });
}

// Function that deletes a profile element
function removeProfile(inputElement) {
  var profileItem = inputElement.closest('.profile-item');
  profileItem.parentNode.removeChild(profileItem);
}

// Function that deletes a skill element
function removeSkill(inputElement) {
  var skillItem = inputElement.closest('.skill-item');
  skillItem.parentNode.removeChild(skillItem);
}

function removeImage() {
    document.getElementById('uploaded_file').innerHTML = '';
    document.getElementById('image_path').style.display = 'block';
}

document.addEventListener('DOMContentLoaded', function () {
  // Function to toggle field sets based on the selected content type
  function toggleFields() {
      var contentTypeElement = document.getElementById('content_type');

      // Check if the element exists before accessing its value property
      if (contentTypeElement) {
          var selectedType = contentTypeElement.value;

          // Hide all field sets
          document.querySelectorAll('.content-fields').forEach(function (fieldSet) {
              fieldSet.style.display = 'none';
          });

          // Show the field set corresponding to the selected type
          document.getElementById(selectedType + '_fields').style.display = '';
      }
  }

  // Initial toggle on page load
  toggleFields();

  // Add an event listener for the change event on the content type select
  var contentTypeSelect = document.getElementById('content_type');
  if (contentTypeSelect) {
      contentTypeSelect.addEventListener('change', toggleFields);
  }
});
