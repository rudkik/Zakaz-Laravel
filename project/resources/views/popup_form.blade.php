<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
                <form action="{{ route('send-mail-recall') }}" class="popup" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Заполните форму обратной связи</h1>
                    <p>Мы свяжемся с вами в ближайшее время</p>
                    <input type="text" placeholder="Введите имя" name="name">
                    <input type="text" placeholder="Введите телефон*" name="phone">
                    <input type="text" placeholder="Введите E-mail" name="email">
                    <button type="submit">Отправить</button>
                    <label class="agree"><input type="checkbox"> Я согласен на обработку персональных данных</label>
                </form>
            </div>
        </div>
    </div>
</div>
