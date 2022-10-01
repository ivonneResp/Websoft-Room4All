<div class="modal fade" id="modal-update-category-{{$category->id}}">
        <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">actualizar Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>

            <form action="{{ route('Administrador.categories.update', $category->id) }}" method="POST"> 
                {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-gorup">
                    <label for="titulo"> Categoría</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" value="{{$category->titulo}}">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">cerrar</button>
                <button type="submit" class="btn btn-outline-primary">guardar</button>
            </div>
            </form>

        </div>
      <!-- /.modal-content -->
    </div>
</div>