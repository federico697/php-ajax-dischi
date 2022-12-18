<div id="app">
    <header class="p-3">
        <i class="fa-brands fa-spotify fa-2x text-white"></i>
    </header>

    <!-- struttura a righe e colonne per i dischi -->
    <div class="container">
        <div class="row pb-3">
            <div class="col-4 g-3" v-for="(elem, index) in arrayDischi" :key="index">
                <div class="card text-white" style="width: 18rem;">
                    <img :src="elem.poster" class="card-img-top" alt="elem.title">
                    <div class="card-body text-white">
                        <h5 class="card-title">{{elem.title}}</h5>
                        <p class="card-title">{{elem.genre}}</p>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>