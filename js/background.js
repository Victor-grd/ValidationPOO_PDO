document.querySelector('#select_role').addEventListener('change', (el) => {
    var img = el.target.options[el.target.selectedIndex].getAttribute('data-image')
    document.querySelector('.background').src="./elements/images/background/"+ img +".jpg"
})