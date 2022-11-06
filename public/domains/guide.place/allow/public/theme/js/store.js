window.qstore = {
	state: {
		myRoute: {
			items: []
		}
	},
	addItemToMyRoute(item) {
		let itemInMyRoute = this.state.myRoute.items.find(e => e.id === item.id)
		if(itemInMyRoute) {
			alert('Added')
		} else {
			this.state.myRoute.items.push(item)
			updateLS()
		}
	},
	removeItemFromMyRouteByID(id) {
		let itemIndex = this.state.myRoute.items.findIndex(e => e.id == id)
		if(itemIndex !== -1) {
			this.state.myRoute.items.splice(itemIndex, 1)
			updateLS()
		}
	},
	setMyRouteItems(items = []) {
		//console.log(items)
		this.state.myRoute.items = items
		updateLS()
	},
	setState(state) {
		this.state = state
	}
}

const LS = window.localStorage

if(LS.getItem('store')) {
	qstore.setState(JSON.parse(LS.getItem('store')))
}

function updateLS() {
	console.log('ls updated')
	LS.setItem('store', JSON.stringify(qstore.state))
}

window.addEventListener('storage', function(e) {
	console.log(e)
})

function createGallery(e) {
	console.log(e)
	let gl = e.field_gallery
	let regex = /\/medium\/(.*?)\.jpg/g;
	let matches_imgs = gl.match(regex);

	let items = []
	if(matches_imgs) {
		items = matches_imgs.map(m => m.replace('/medium/', ''))
	}
	return Object.assign(e, {field_gallery: items})
}