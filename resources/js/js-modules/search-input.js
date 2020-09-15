const Url = 'https://'
const params = 'action=query&list=search&format=json&origin=*'

const search = input => {
  const url = `${Url}/w/api.php?${
    params
  }&srsearch=${encodeURI(input)}`

  return new Promise(resolve => {
    if (input.length < 3) {
      return resolve([])
    }

    fetch(url)
      .then(response => response.json())
      .then(data => {
        resolve(data.query.search)
      })
  })
}

createAutocomplete = (selector, countSelector, debounceTime) => {
  let count = 0
  const countEl = document.querySelector(countSelector)

  new Autocomplete(selector, {

    search: input => {
      count += 1
      countEl.textContent = count
      return search(input)
    },

    debounceTime,

    getResultValue: result => result.title,

    onSubmit: result => {
      window.open(`${Url}/${
        encodeURI(result.title)
      }`)
    }
  })
}

createAutocomplete('.regular', '.count')
createAutocomplete('.debounced', '.count-debounced', 500)
