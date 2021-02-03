
(async ()=> {
const { value: accept } = await Swal.fire({
    title: 'Terminos y Condiciones',
    input: 'checkbox',
    inputValue: 1,
    inputPlaceholder:
      'Estoy de acuerdo con los terminos y condiciones para utilizar el sistema y ver la informacion',
    confirmButtonText:
      'ok&nbsp;<i class="fa fa-arrow-right"></i>',
    inputValidator: (result) => {
      return !result && 'Debes estar de acuerdo con los terminos y condiciones T&C'
    }
  })
  
} ) ()
