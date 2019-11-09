<!-- TABLE -->
  <div class="container pt-5">
  <?= $this->session->flashdata('pesan'); ?>
    <table class="table table-borderless mr-3 ml-3 mt-5 text-center bayang">
      <thead class="text-white" style="background-color: #CECECE;">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Cashier</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $no = 1;
      foreach($get_data as $data):
      ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $data['cashier_name'] ?></td>
          <td><?= $data['name']; ?></td>
          <td><?= $data['category_name']; ?></td>
          <td>Rp.<?= $data['price']; ?></td>
          <td>
          <?= form_open('Home/change') ?>
          <input type="hidden" name="id_product" value="<?= $data['id'] ?>">
          <button type="submit" class="btn" style="color: #ACE087;">Edit</button>
          |<a href="Home/delete/<?= $data['id'] ?>" class="btn" style="color: #F75865;">Delete</a>
          <?= form_close(); ?> 
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

<!-- Modal Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">ADD</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pl-5 pr-5">
            <?= form_open('Home/insert') ?>
              <div class="form-group">
                <select name="id_cashier" class="form-control">
                  <option value="1">Cashier Name</option>
                  <option value="1">Pevita Pearce</option>
                  <option value="2">Raisa Andriana</option>
                  <option value="3">Hapid Moch Jamil</option>
                </select>
              </div>
              <div class="form-group">
                <input name="product_name" type="text" class="form-control" placeholder="Product Name">
              </div>
              <div class="form-group">
                <select name="id_category" class="form-control">
                  <option value="1">Category Name</option>
                  <option value="1">food</option>
                  <option value="2">drink</option>
                </select>
              </div>
              <div class="form-group">
                <input name="price" type="number" class="form-control" placeholder="Price">
              </div>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn text-white pr-5 pl-5" style="background-color: #FF8FB2;">ADD</button>
          <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
