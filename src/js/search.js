const searchModal = () => {

    // Hämta in elementen
    const modal = document.querySelector('#search-modal')
    const closeButton = document.querySelector('.search-modal__close')
    const openButton = document.querySelectorAll('.search__button, .site-header__search-button')

    const handleKeypress = (event) => {

        if ( event.keyCode == 75 && event.metaKey || event.keyCode == 75 && event.ctrlKey) {
            openModal()
        }
    }

    // Funktion som visar ruta
    const openModal = () => {
        modal.showModal()
    }

    // Funktion som stänger ruta
    const closeModal = () => {
        modal.close()
    }

    // Koppla knapparna som skall slutföra detta
    // För varje knapp (foreach) får den här eventlistenern på sig
    openButton.forEach( button => button.addEventListener('click', openModal))
    closeButton.addEventListener('click', closeModal)
    document.addEventListener('keydown', handleKeypress)
}

searchModal()