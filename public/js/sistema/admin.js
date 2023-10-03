const selectOptions = {
    user: 'user',
}

document.getElementById('selectFunction').addEventListener('change', function() {
    const selectedOption = this.value
    const dynamicContent = document.getElementById('dynamicContent')
    dynamicContent.innerHTML = ''

    if (selectedOption in selectOptions) {
        const includeFile = selectOptions[selectedOption]
        dynamicContent.innerHTML = `@include('admin/${includeFile}')`
    }
})
