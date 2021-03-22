<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายชื่อกิจกรรม</h3>

                <div class="card-tools">
                  <button class="btn btn-success" data-toggle="modal" 
               data-target="#addActivity">เพิ่มกิจกรรม<i class="fas fa-user-plus fa-fw"></i></button>
                </div>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>รหัสกิจกรรม</th>
                    <th>ชื่อกิจกรรม</th>
                    <th>สถานที่</th>
                    <th>วัน</th>
                    <th>เวลาเริ่ม</th>
                    <th>เวลาจบ</th>
                    <th>อื่นๆ</th>
                  </tr>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td>
                        <a href="">
                            <i class="fa fa-edit"></i>
                        </a>
                        |
                        <a href="">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->

        <!-- Modal -->
        <div class="modal fade" id="addActivity" tabindex="-1" role="dialog" aria-labelledby="addActivityLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addActivityLabel">เพิ่มรายชื่อนักศึกษา</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <form @submit.prevent="createUser">
              <div class="modal-body">
                <div class="form-group">
                    <input v-model="form.code" type="id" name="code" class="form-control" placeholder="รหัสกิจกรรม" :class="{ 'is-invalid':form.errors.has('id') }">
                    <has-error :form="form" field="code"></has-error>
                </div>
                <div class="form-group">
                    <input v-model="form.name" type="text" name="name" class="form-control" placeholder="ชื่อ-นามสกุล" :class="{ 'is-invalid':form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
               
                <div class="form-group">
                    <select name="field" v-model="form.bachelor" id="field" class="form-control" :class="{ 'is-invalid':form.errors.has('field') }">
                        <option value="">โปรดเลือกสาขาวิชา</option>
                        <option value="agritech">เทคโนโลยีการเกษตร</option>
                        <option value="food">การอาหารและธุรกิจบริการ</option>
                        <option value="chemis">เคมี</option>
                        <option value="bio">ชีววิทยาประยุกต์</option>
                        <option value="IT">เทคโนโลยีสารสนเทศ</option>
                        <option value="physics">ฟิสิกส์ประยุกต์</option>
                        <option value="comsci">วิทยาการคอมพิวเตอร์</option>
                        <option value="safety">อาชีวอนามัยและความปลอดภัย</option>
                        <option value="ensci">วิทยาศาสตร์สิ่งแวดล้อม</option>
                        <option value="pubhealth">สาธารณสุขศาสตร์</option>
                    </select>
                    <has-error :form="form" field="field"></has-error>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">เพิ่ม</button>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    id: '',
                    name: '',
                    field: '',
                 
                })
            }
        },
        methods: {
            createActivity(){
                this.form.post('api/activity');
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>