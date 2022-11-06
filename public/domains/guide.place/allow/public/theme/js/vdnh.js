document.addEventListener('DOMContentLoaded', function() {
	
	const myRouteStartPointsList = [
		{coords: [55.826296, 37.637650], name: 'Арка Главного входа', address: 'Москва, ВДНХ, Арка Главного входа'},
		{coords: [], name: 'КПП «1-й Лихоборский»', address: 'Москва, ВДНХ, КПП «1-й Лихоборский»'},
		{coords: [], name: 'КПП «1-й Северный»', address: 'Москва, ВДНХ, КПП «1-й Северный»'},
		{coords: [], name: 'КПП «2-й Северный»', address: 'Москва, ВДНХ, КПП «2-й Северный»'},
		{coords: [], name: 'КПП «Совхозный»', address: 'Москва, ВДНХ, КПП «Совхозный»'},
		{coords: [], name: 'КПП «Хованский»', address: 'Москва, ВДНХ, КПП «Хованский»'},
		{coords: [], name: 'Арка Северного входа', address: 'Москва, ВДНХ, Арка Северного входа'},
		{coords: [], name: 'Арка Южного входа', address: 'Москва, ВДНХ, Арка Южного входа'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны Ботанической улицы', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны Ботанической улицы'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны Дворцового (Останкинского) пруда', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны Дворцового (Останкинского) пруда'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны остановки «Улица Академика Комарова»', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны остановки «Улица Академика Комарова»'},
		{coords: [], name: 'Вход в парк «Останкино» со стороны телецентра', address: 'Москва, ВДНХ, Вход в парк «Останкино» со стороны телецентра'},
		{coords: [], name: 'Главный вход в парк «Останкино» со стороны музея-усадьбы', address: 'Москва, ВДНХ, Главный вход в парк «Останкино» со стороны музея-усадьбы'}
	]
	
	Vue.directive('click-outside', {
	  bind: function (el, binding, vnode) {
		el.clickOutsideEvent = function (event) {
		  // here I check that click was outside the el and his children
		  if (!(el == event.target || el.contains(event.target))) {
			// and if it did, call method provided in attribute value
			vnode.context[binding.expression](event);
		  }
		};
		document.body.addEventListener('click', el.clickOutsideEvent)
	  },
	  unbind: function (el) {
		document.body.removeEventListener('click', el.clickOutsideEvent)
	  },
	})
	
	const chartOptions = {
		responsive: true,
		maintainAspectRatio: false,
		title: {
			//display: true,
			//text: 'Chart.js Line Chart'
		},
		legend: {
            display: false
        },
		tooltips: {
			mode: 'index',
			intersect: false,
			callbacks: {
				title: function(tooltipItem, data) {
				  	return ''
				},
				label: function(tooltipItem, data) {
					let val = tooltipItem.yLabel
					let res = 'свободно'
					if(val > 30 && val < 70) {
						res = 'средняя загруженность'
					}
					if(val >= 70) {
						res = 'тесно'
					}
					return res
				}
			}
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
			  display: true,
			  categoryPercentage: 0.9,
			  scaleLabel: {
				display: true,
				labelString: 'Часы посещения'
			  }
			}],
			yAxes: [
				{
					display: false,
					scaleLabel: {
						display: true,
						labelString: 'Value'
					},
					ticks: {
						beginAtZero: true
					}
				}
			]
		}
	}
	
	Vue.component('my-bar-chart', {
        extends: VueChartJs.Bar,
        props: ['barData', 'chartOptions'],
        mounted() {
          this.renderChart(this.barData, this.chartOptions);
        },
        watch: {
          barData () {
            console.log('bar data changed')
            this.renderChart(this.barData, this.chartOptions);
        },
          chartOptions () {
            this.renderChart(this.barData, this.chartOptions);
         }
        }
	}, {
        responsive: true,
        maintainAspectRatio: false
 	})
	
	const barsSampleData = [
		{
			name: 'ПН',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30]
					}
				]
			}
		},
		{
			name: 'ВТ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 40, 10, 70, 50, 15, 30, 40, 60, 80, 70, 60, 30, 10, 5]
					}
				]
			}
		},
		{
			name: 'СР',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30, 10, 5]
					}
				]
			}
		},
		{
			name: 'ЧТ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30]
					}
				]
			}
		},
		{
			name: 'ПТ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30]
					}
				]
			}
		},
		{
			name: 'СБ',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30]
					}
				]
			}
		},
		{
			name: 'ВС',
			chartData: {
				labels: [
				  '8',
				  '9',
				  '10',
				  '11',
				  '12',
				  '13',
				  '14',
				  '15',
				  '16',
				  '17',
				  '18',
				  '19',
				  '20',
				  '21',
				  '22'
				],
				datasets: [
					{
						backgroundColor: '#336af7',
						data: [, 10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30]
					}
				]
			}
		}
	]
	
	window.VUE_VDNH = new Vue({
		el: '#v-search-root',
		name: 'VDNH',
		data: function() {
			return {
				isAppLoaded: true,
				isFullWidthLayout: false,
				isSearchShowlist: true,
				pageItems: [],
				activeRoute: {
					paths: [],
					common: {
						duration: '',
						distance: ''
					}
				},
				myRouteStartPointsList: myRouteStartPointsList,
				isMyRouteStartPointsListActive: false,
				myRouteStartPoint: null,
				isPageItemsLoaded: false,
				isHeatmapShowed: false,
				workLoadItems: barsSampleData,
				selectedWorkLoadItem: {name: 'ПН'},
				chartOptions,
				chartData: {
					labels: [
					  '9',
					  '10',
					  '11',
					  '12',
					  '13',
					  '14',
					  '15',
					  '16',
					  '17',
					  '18',
					  '19',
					  '20'
					],
					datasets: [
					  	{
							//label: 'Data One',
						 	backgroundColor: '#336af7',
							data: [10, 20, 30, 50, 15, 30, 40, 60, 80, 70, 60, 30]
					  	}
					]
				}
			}
		},
		watch: {
			pageItems: {
				//deep: true,
				handler: function(v) {
					try {
						if(this.isPageItemsLoaded) {
							this.activeRoute = drawRoute(getRoutePoints(v, this.myRouteStartPoint), this.myRouteStartPoint)
							qstore.setMyRouteItems(v)
						}
					} catch(e) {
						console.log(e)
					}
				}
			},
			myRouteStartPoint: {
				deep: true,
				handler: function(v) {
					try {
						this.activeRoute = drawRoute(getRoutePoints(this.pageItems, v), this.myRouteStartPoint)
					} catch(e) {
						console.log(e)
					}
				}
			}
		},
		methods: {
			myRouteItemWorkLoadBarData(item) {
				return item.field_event_workload_graph.find(e => e.name == item.field_event_workload_selected_day).chartData
			},
			myRouteItemSetWorkLoadBarDay(item, wlObj) {
				item.field_event_workload_selected_day = wlObj.name
			},
			setMyRouteStartPoint(item) {
				this.myRouteStartPoint = item
				this.isMyRouteStartPointsListActive = false
			},
			removeItemFromMyRouteByID(itemId) {
				qstore.removeItemFromMyRouteByID(itemId)
			},
			myRouteStartPointsListActiveClickOutside() {
				if(this.isMyRouteStartPointsListActive) this.isMyRouteStartPointsListActive = false
			},
			myRouteItemImgSrc(item) {
				if(item && item.field_gallery && item.field_gallery.length > 0) return `/site/data/images/medium/${item.field_gallery[0]}`
				return `/site/data/images/medium/${item.field_image}`
			},
			myRouteItemPriceText(price) {
				if(price === 0) return 'бесплатно'
				if(price > 0) return `от ${price} ₽`
				return ''
			},
			myRouteItemWorkloadClass(percent) {
				if(percent) {
					let pc = Number(percent)
					if(pc > 0 && pc < 30) {
						return 'workload-icon--low'
					}
					if(pc >= 30 && pc < 70) {
						return 'workload-icon--md'
					}
					if(pc >= 70) {
						return 'workload-icon--high'
					}
				}
				return 'workload-icon--low'
			},
			myRouteItemWorkloadText(percent) {
				if(percent) {
					let pc = Number(percent)
					if(pc > 0 && pc < 30) {
						return 'свободно'
					}
					if(pc >= 30 && pc < 70) {
						return 'средняя загруженность'
					}
					if(pc >= 70) {
						return 'тесно'
					}
				}
				return 'свободно'
			},
			myRouteItemDurationText(duration) {
				if(!duration) return ''
				return `+ ${duration} ч.`
			},
			switchHeatmap() {
				if(window.heatmap) {
					if(this.isHeatmapShowed) {
						window.heatmap.options.set('opacity', 0)
						this.isHeatmapShowed = false
					} else {
						window.heatmap.options.set('opacity', 1)
						this.isHeatmapShowed = true
					}
				}
			},
			myRouteItemSwitchWorkLoad(item) {
				item.field_event_workload_show_graph = !item.field_event_workload_show_graph
			},
			scrollToList() {
				
			}
		},
		computed: {
			myRouteFullDurationText() {
				const myRouteItemsDuration = this.pageItems.reduce((a, b) => a + (b.field_event_duration ? Number(b.field_event_duration) : 0), 0)
				if(this.activeRoute.common.duration.value) {
					const fullTime = (myRouteItemsDuration * 60 * 60 + this.activeRoute.common.duration.value) / 60 / 60
					const hours = Math.trunc(fullTime)
					const minutes = Math.round(((fullTime - hours) % 1) * 60)
					return `${hours}ч ${minutes}мин` 
				}
				return myRouteItemsDuration
			},
			myRoutePaidItems() {
				return this.pageItems.filter(e => e.field_prices > 0)
			},
			myRoutePaidLink() {
				if(this.myRoutePaidItems.length > 0) {
					const baseURL = 'https://vdnh.ru/selections/kupit-bilet/?show_ticket_widget=Y&tickets='
					const ticketsIDs = this.myRoutePaidItems.map(e => e.field_vdnh_tickets).join()
					return baseURL + ticketsIDs
				}
				return '#'
			},
			myRouteStartPointText() {
				if(this.myRouteStartPoint) return this.myRouteStartPoint.name
				return 'Откуда построить маршрут?'
			},
			myRoutePointsCountText() {
				let count = this.pageItems.length
				if(count == 1) {
					return count + ' точка'
				}
				if(count > 1 && count < 5) {
					return count + ' точки'
				}
				if(count > 4) {
					return count + ' точек'
				}
				return count
			},
			pointList: {
				get() {
					//console.log(qstore.state.myRoute.items)
					//return qstore.state.myRoute.items
				},
				set(value) {
					//console.log(value.map(e => e.field_header))
					//qstore.setMyRouteItems(value)
				}
			}
		},
		async mounted() {
			const vm = this
		
			this.pageItems = qstore.state.myRoute.items
			this.pageItems.forEach(e => {
				const sampleWorkLoadData = JSON.parse(JSON.stringify(barsSampleData))
				e.field_event_workload_show_graph = false
				e.field_event_workload_selected_day = 'ПН'
				e.field_event_workload_graph = randomizeBarData(sampleWorkLoadData)
			})
			this.$nextTick(() => vm.isPageItemsLoaded = true)
		
			await ymaps.ready(['Heatmap'])
			initMap2()
			this.activeRoute = drawRoute(getRoutePoints(this.pageItems, this.myRouteStartPoint), this.myRouteStartPoint)
			//drawRoute([[55.830572, 37.631125], 'ВДНХ, Сиреневая аллея'])
		}
	})

	function shuffleArray(arr) {
		return arr.sort((a,b) => 0.5 - Math.random());
	}

	function randomizeBarData(chartData) {
		const newData = [...chartData].map(e => {
			e.chartData.datasets[0].data = shuffleArray(e.chartData.datasets[0].data)
			
			e.chartData.datasets[0].backgroundColor = []
			
			e.chartData.datasets[0].data.forEach(x => {
				let color = '#99D31E'
				if(x > 30 && x < 70) {
					color = '#ffb800'
				}
				if(x >= 70) {
					color = '#f91942'
				}
				e.chartData.datasets[0].backgroundColor.push(color)
			})
			
			return e
		})
		//console.log(newData)
		return newData
	}
	
	function drawRoute(points = [], isWithStartPoint = false) {
		try {
			if(!window.vdnhMap) {
				console.log('no map')
				initMap2()
			}

			let multiRoute = new ymaps.multiRouter.MultiRoute({
				referencePoints: points,
				params: {
					routingMode: 'pedestrian'
				}
			}, {
				//wayPointIconPreset: 'islands#redCircleIcon',
        		wayPointIconFillColor: "#f91942",
				wayPointStartIconFillColor: "#f91942",
				wayPointFinishIconFillColor: "#f91942",
				//viaPointIconFillColor: "#333333",
				//wayPointStartIconLayout: 'islands#blueCircleIcon',
				boundsAutoApply: true,
				routeActiveMarkerVisible: false,
				routeOpenBalloonOnClick: false
			})
 
			let routeData = {
				paths: [],
				common: {
					distance: '',
					duration: ''
				}
			}

			multiRoute.model.events.add('requestsuccess', function() {
				let activeRoute = multiRoute.getActiveRoute();
				let activeRoutePaths = activeRoute.getPaths(); 
				
				routeData.common.distance = activeRoute.properties.get("distance").text
				routeData.common.duration = activeRoute.properties.get("duration")
				
				activeRoutePaths.each(function(path) {
					console.log(path.properties)
					routeData.paths.push({distance: path.properties.get("distance").text, duration: path.properties.get("duration")})
				})
				
				const walkPreset = {
					strokeWidth: 3,
					strokeColor: "#336af7",
					strokeStyle: "dot"
				}
				
				const startPreset = {
					strokeWidth: 3,
					strokeColor: "#f91942",
					strokeStyle: "dot"
				}
				
				for (let i = 0; i < activeRoute.getPaths().getLength(); i++) {
					const way = activeRoute.getPaths().get(i)
					const segments = way.getSegments()
					for (let j = 0; j < segments.getLength(); j++) {
						//console.log(i)
						if(!!isWithStartPoint && i == 0) {
							segments.get(j).options.set({ preset: startPreset })
						} else {
							segments.get(j).options.set({ preset: walkPreset })
						}
					}
				}
				
				const routePoints = multiRoute.getWayPoints()
				
				for(let i = 0; i < routePoints.getLength(); i++) {
					const wayPoint = routePoints.get(i)
					if(!!isWithStartPoint) {
						if(i == 0) {
							wayPoint.options.set({
								preset: "islands#redCircleIcon",
								iconContentLayout: ymaps.templateLayoutFactory.createClass(
									`<span class="vmap-point vmap-point--start" style="font-family: 'Rubik', sans-serif;">S</span>`
								)
							})
						} else {
							wayPoint.options.set({
								preset: "islands#blueCircleIcon",
								iconContentLayout: ymaps.templateLayoutFactory.createClass(
									`<span class="vmap-point vmap-point--${i}" style="font-family: 'Rubik', sans-serif;">${i}</span>`
								)
							})
						}
					} else {
						wayPoint.options.set({
							preset: "islands#blueCircleIcon",
							iconContentLayout: ymaps.templateLayoutFactory.createClass(
								`<span class="vmap-point vmap-point--${i + 1}" style="font-family: 'Rubik', sans-serif;">${i + 1}</span>`
							)
						})
					}
				}
				
			})

			vdnhMap.geoObjects.removeAll()
			vdnhMap.geoObjects.add(multiRoute)
			return routeData
		} catch(e) {
			console.log(e)
		}
	}
	/*
	ymaps.modules.require(['Heatmap'], function (Heatmap) {
		 var data = {
			  type: 'FeatureCollection',
			  features: [{
				  id: 'id1',
				  type: 'Feature',
				  geometry: {
					  type: 'Point',
					  coordinates: [37.782551, -122.445368]
				  }
			  }, {
				  id: 'id2',
				  type: 'Feature',
				  geometry: {
					  type: 'Point',
					  coordinates: [37.782745, -122.444586]
				  }
			  }]
		  },
		 heatmap = new Heatmap(data);
		 heatmap.setMap(vdnhMap);
	});
	*/
	
	async function initMap2() {
		console.log('map init2')
		window.vdnhMap = new ymaps.Map('vdnhmap', {
			center: [55.830572, 37.631125],
			zoom: 15,
			controls: ['zoomControl']
		}, {
			buttonMaxWidth: 300
		})
		
		const data = [[53.201445,50.100463],[53.206859,50.126356],[53.187634,50.091078],[53.192819,50.104424],[53.188804,50.089531],[53.208222,50.114417],[53.199811,50.10473],[53.191514,50.107246],[53.188087,50.099061],[53.188303,50.097615],[53.188426,50.098038],[53.199978,50.105987],[53.199978,50.105987],[53.204773,50.117782],[53.209812,50.138558],[53.20076,50.098603],[53.191611,50.107317],[53.192301,50.094866],[53.192123,50.095423],[53.187494,50.089225],[53.188471,50.089881],[53.202621,50.112491],[53.202228,50.142652],[53.220016,50.16297],[53.194102,50.096349],[53.19549,50.10217],[53.312146,50.180613],[53.19369,50.078326],[53.25194,50.166633],[53.401735,50.119008],[53.344943,50.144201],[53.419151,50.053281],[53.19549,50.10217],[53.210164,50.11834],[53.212677,50.145232],[53.216569,50.135042],[53.200575,50.099878],[53.193786,50.095995],[53.189906,50.090904],[53.204058,50.111039],[53.189791,50.082047],[53.215904,50.132277],[53.205966,50.117959],[53.186435,50.095572],[53.204463,50.111429],[53.251052,50.222563],[53.192922,50.094373],[53.202746,50.103302],[53.19364,50.095622],[53.205533,50.144545],[53.188117,50.110105],[53.189782,50.09197],[53.18887,50.103292],[53.198745,50.113149],[53.193553,50.110488],[53.473311,49.912102],[53.209255,50.115653],[53.277942,50.237488],[53.205889,50.110191],[55.746209,37.580435],[55.789562,37.74772],[55.7916,37.748208],[55.78507,37.623982],[55.789875,37.749397],[55.741842,37.56686],[55.790489,37.747047],[55.791744,37.748619],[55.753926,37.556422],[55.822391,37.647131],[55.838925123039,37.626190461722],[55.82907903,37.62834299],[55.82907903,37.62834299],[55.835078576371,37.621895312114],[55.832749492873,37.626987220951],[53.415605,50.017765],[53.415605,50.017765],[53.415605,50.017765],[55.815852,37.676688],[55.835098,37.621829],[55.82907903,37.62834299],[55.828720332498,37.631385818836],[55.831002217649,37.63258820582],[55.832749492873,37.626987220951],[55.828733661367,37.629502906771],[55.827716323755,37.626822175131],[55.838925123039,37.626190461722],[55.83926941,37.6222626],[55.837848191914,37.615467007219],[55.835744980485,37.614349056786],[55.833072293919,37.611642572749],[55.83397258,37.62657005],[55.832978260687,37.619370996031],[55.831339981478,37.618995127147],[55.83533326,37.62579238],[55.82720148192,37.637284093589],[55.833972559488,37.628077720867],[55.828429238045,37.626500581967],[55.834580023783,37.613752187742],[55.82805480654,37.627645343893],[55.83851434,37.62668806],[55.832575359725,37.631631507874],[55.8379641,37.62566328],[55.830984577153,37.633852604368],[55.834797189359,37.62052202741],[55.836458768369,37.622419468747],[55.835307674463,37.621499812052],[55.836993699953,37.624312498133],[55.829974021782,37.61993294266],[55.836178555765,37.614897389018]];

		
		window.heatmap = new ymaps.Heatmap(data, {
			// Радиус влияния.
			radius: 50,
			// Нужно ли уменьшать пиксельный размер точек при уменьшении зума. False - не нужно.
			dissipating: false,
			// Прозрачность тепловой карты.
			opacity: 0.8,
			// Прозрачность у медианной по весу точки.
			intensityOfMidpoint: 0.2,
			// JSON описание градиента.
			gradient: {
				0.1: 'rgba(128, 255, 0, 0.7)',
				0.2: 'rgba(255, 255, 0, 0.8)',
				0.7: 'rgba(234, 72, 58, 0.9)',
				1.0: 'rgba(162, 36, 25, 1)'
			}
		});
		heatmap.options.set('opacity', 0)
		heatmap.setMap(vdnhMap);
		
	}
	
	function getRoutePoints(items = [], start = null) {
		let res = []
		
		if(start) {
			if(start.coords.length == 2) {
				res.push(start.coords)
			} else {
				res.push(start.address)
			}
		}
		
		res = [...res, ...items
			.filter(e => {
				//nsole.log(e.id, e.field_coords)
				if(e.field_coords) return true
				console.log('No coords: ', e.id)
			})
			.map(e => {
				return e.field_coords.split(',').map(x => Number(x.trim()))
			})
		]
		//console.log(res)
		return res
	}
	
	function initMap() {
		console.log('map init')
		// Задаём точки мультимаршрута.
		var pointA = [55.830572, 37.631125],
			pointB = 'ВДНХ, Сиреневая аллея',//[55.834322, 37.630242],
			pointC = [55.835515, 37.623168]
			/**
			 * Создаем мультимаршрут.
			 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
			 */
		let multiRoute = new ymaps.multiRouter.MultiRoute({
			referencePoints: [
				pointA,
				pointB,
				pointC
			],
			params: {
				//Тип маршрутизации - пешеходная маршрутизация.
				routingMode: 'pedestrian'
			}
		}, {
			// Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
			boundsAutoApply: true
		});

		// Создаем кнопку.

		// Создаем карту с добавленной на нее кнопкой.
		window.vdnhMap = new ymaps.Map('vdnhmap', {
			center: [55.830572, 37.631125],
			zoom: 15,
			controls: ['zoomControl']
		}, {
			buttonMaxWidth: 300
		});

		// Добавляем мультимаршрут на карту.
		vdnhMap.geoObjects.add(multiRoute);
	}
	
	function parseObject(str, d = {}) {
		try {
			if(str) {
				return JSON.parse(str)
			}
			return d
		} catch(e) {
			console.log(e)
			return d
		}
	}
	
})