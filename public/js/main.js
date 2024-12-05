function dropdownmenu(menu) {
      $('.'+menu+'-item').toggleClass('hidden')
      $('.'+menu+'-icon').toggleClass('rotate-icon')
}

function show_absolute(kelas) {
      console.log('hai')
      $('.'+kelas+'-menu').toggleClass('hidden')
      $('.'+kelas+'-icon').toggleClass('rotate-icon')
}
