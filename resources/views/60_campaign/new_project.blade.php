<div class="modal fade" id="newProjectModal" tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="{{ URL::to('project/new') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <h6 class="card-header dtitle p-2">New project
        <i class="fa fa-times env_edit pull-right text-secondary" aria-hidden="true" data-toggle="modal" data-target="#newProjectModal"></i>
      </h6>
      <div class="card-body p-3">
          
          <div class="form-group">
            <label for="title" class="mb-0">Title</label>
            <input name="title" type="text" class="btn-sm form-control" id="title" placeholder="Enter title" required="required">
          </div>
          <div class="form-group">
            <label for="description" class="mb-0">Description <small id="descriptionHelp" class="text-muted">(short project description)</small></label>
            <textarea name="description" class="btn-sm form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description" rows="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="tags" class="mb-0">Tags <small id="descriptionHelp" class="text-muted">(max. 6)</small></label>
            <input name="tags" type="text" class="btn-sm form-control taglist" id="tags" placeholder="Enter tags">
          </div>
          <div class="form-group">
            <label for="images" class="mb-0">Project images <small class="text-muted">(multiple images allowed, min. 1 required)</small></label>
            <div style="position: relative; left: 0px; top: 0px; height: 40px;" class="mb-3">
              <div class="btn btn-outline-primary" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">Drop files here or click to upload</div>
              <input id="env_point" type="file" name="images[]" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity:0;" required="true" multiple="true"> 
            </div>
          </div>
          <div class="form-group">
            <label for="license" class="mb-0"><b>License:</b> Creative Commons - Attribution + ShareAlike
              <small class="text-muted" style="display: none;">(Regularly used <a href="https://creativecommons.org/" class="env_link text-success" target="_blank">Creative Commons</a> license)</small>
            </label>
            <select name="license" class="btn-sm form-control" id="license" required="true" style="display: none;">
              <option>Public Domain</option>
              {{-- CC-PD --}}

              <option>Freeing content globally without restrictions</option>
              {{-- CC-0-PD --}}

              <option>Attribution alone</option>
              {{-- CC-BY --}}

              <option>Attribution + ShareAlike</option>
              {{-- CC-BY-SA --}}

              <option>Attribution + Noncommercial</option>
              {{-- CC-BY-NC --}}

              <option>Attribution + NoDerivatives</option>
              {{-- CC-BY-ND --}}

              <option>Attribution + Noncommercial + ShareAlike</option>
              {{-- CC-BY-NC-SA --}}

              <option>Attribution + Noncommercial + NoDerivatives</option>
              {{-- CC-BY-NC-ND --}}

            </select>
            <label for="license" class="mt-2 text-justify" style="display: ;">
              <small class="text-secondary">
                CC-BY-SA <br>
                This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects.
              </small>
            </label>
          </div>
          
      </div>
      <div class="card-footer p-2 text-right">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm env_button">Create project</button>
      </div>
    </form>
    </div>
  </div>
</div>
