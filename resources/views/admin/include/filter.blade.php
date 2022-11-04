<div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Фильтр</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-control" >
                        <label >Параметры поиска</label>
                        <input type="text" name="nameSearch" class="form-control text-center" id="search" placeholder="Введите имя">
                        <input type="text" name="descriptionSearch" class="form-control text-center" id="search" placeholder="Поиск в описании">
                        <input type="text" name="purposeSearch" class="form-control text-center" id="search" placeholder="Поиск в назначении">
                        <input type="text" name="nitroBefor" class="form-control text-center" placeholder="Введите min  нитратов">
                        <input type="text" name="nitroAfter" class="form-control text-center" placeholder="Введите max нитратов">
                        <input type="text" name="phosforBefor" class="form-control text-center" placeholder="Введите min фосфора">
                        <input type="text" name="phosforAfter" class="form-control text-center" placeholder="Введите max фосфора">
                        <input type="text" name="kaliBefor" class="form-control text-center" placeholder="Введите min калия">
                        <input type="text" name="kaliAfter" class="form-control text-center" placeholder="Введите max калия">
                        <input type="text" name="priceBefor" class="form-control text-center" placeholder="Введите min цену">
                        <input type="text" name="priceAfter" class="form-control text-center" placeholder="Введите max цену">
                    <select class="form-select" name="Region[]" multiple aria-label="multiple select example">
                        <option >Выберите регион</option>
                        @foreach($fertilizers as $fertilizer)
                        <option value="{{$fertilizer->rigeon}}">{{$fertilizer->rigeon}}</option>
                        @endforeach
                    </select>
                    <select class="form-select" name="Culturec[]" multiple aria-label="multiple select ">
                        <option >Выберите культуру</option>
                        @foreach($fertilizers as $fertilizer)
                            <option value="{{$fertilizer->id}}">{{$fertilizer->culture->name}}</option>
                        @endforeach
                    </select>
                        <input type="submit" name="Поиск" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{route('admin.fertilizers.index')}}" class="btn btn-primary " role="button">Сброс фильтра</a>

            </div>
        </div>
    </div>
</div>

