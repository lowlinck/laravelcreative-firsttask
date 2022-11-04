<div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Фильтр</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-control " >
                        <label >Параметры поиска</label>
                        <input type="text" name="name" class="form-control text-center" placeholder="Введите имя">
                        <input type="date" name="datastart" class="form-control text-center" placeholder="Введите начальную  дату">
                        <input type="date" name="dataend" class="form-control text-center" placeholder="Введите конечную  дату">
                        <input type="text" name="Pricebefor" class="form-control text-center" placeholder="Введите min цену">
                        <input type="text" name="Priceafter" class="form-control text-center" placeholder="Введите max цену">

                    <select class="form-select" name="region[]" multiple aria-label="multiple select example">
                        <option>Выберите регион</option>
                        @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->region}}</option>
                        @endforeach
                    </select>
                        <input type="submit" name="Поиск" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{route('admin.clients.index')}}" class="btn btn-primary " role="button">Сброс фильтра</a>

            </div>
        </div>
    </div>
</div>

