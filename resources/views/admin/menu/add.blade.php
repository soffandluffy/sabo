<div id="modalAddMenu" class="modal border-radius-6" aria-preventScrolling="true">
  <div class="modal-content">
    <h5 class="mt-0">
      Add New Menu
    </h5>
    <form method="POST" action="{{ route('menu.add') }}">
      @csrf
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">title </i>
          <input id="name" type="text" name="name" class="validate">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col s12 m12 l12">
            <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel
                      <i class="material-icons right">cancel</i>
            </a>
                      <button class="btn waves-effect waves-light" type="submit" name="action">Add
                      <i class="material-icons right">menu</i>
                      </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>