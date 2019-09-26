document.querySelector('#select_role').addEventListener('change', (el) => {
    // console.log(el.target.data('image'));
    var img = el.target.options[el.target.selectedIndex].getAttribute('data-image')
    
    
    document.querySelector('.background').src="./elements/images/background/"+ img +".jpg"
})