
<!-- Main Content -->
<div class="content-wrapper" style="background: #fff;">
    <div class="container-fluid">
    <div class="col-lg-12 col-md-12 mx-auto">
        <p style="color: red;">Edit posts <?php echo $pot['title']; ?></p>
        <form name="editPost" id="editPost" action="" method="post">

        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="title">Title</label>
            <big>Title</big>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $pot['title']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="sub_title">Sub Title</label>
            <big>Sub Title</big>
            <input type="text" class="form-control" id="sub_title" name="sub_title" value="<?php echo $pot['sub_title']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="body">Body</label>
            <big>Body</big>
            <textarea rows="8" class="form-control" id="body" name="body"><?php echo $pot['body']; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="salary">salary</label>
            <big>salary</big>
            <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $pot['salary']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="experience">Experience</label>
            <big>Experience</big>
            <textarea rows="8" class="form-control" id="experience" name="experience"><?php echo $pot['experience']; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="JobType">JobType</label>
            <big>JobType</big>
            <input type="text" class="form-control" id="JobType" name="JobType" value="<?php echo $pot['JobType']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="location">location</label>
            <big>location</big>
            <input type="text" class="form-control" id="location" name="location" value="<?php echo $pot['location']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="AgeRequest">AgeRequest</label>
            <big>AgeRequest</big>
            <input type="text" class="form-control" id="AgeRequest" name="AgeRequest" value="<?php echo $pot['AgeRequest']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="GenderRequest">GenderRequest</label>
            <big>GenderRequest</big>
            <input type="text" class="form-control" id="GenderRequest" name="GenderRequest" value="<?php echo $pot['GenderRequest']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="DegreeRequest">DegreeRequest</label>
            <big>DegreeRequest</big>
            <input type="text" class="form-control" id="DegreeRequest" name="DegreeRequest" value="<?php echo $pot['DegreeRequest']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="amount">amount</label>
            <big>amount</big>
            <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $pot['amount']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="description">description</label>
            <big>description</big>
            <textarea rows="8" class="form-control" id="description" name="description"><?php echo $pot['description']; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="benefit">benefit</label>
            <big>benefit</big>
            <textarea rows="8" class="form-control" id="benefit" name="benefit"><?php echo $pot['benefit']; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="FileRequest">FileRequest</label>
            <big>FileRequest</big>
            <textarea rows="8" class="form-control" id="FileRequest" name="FileRequest"><?php echo $pot['FileRequest']; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="deadline">deadline</label>
            <big>deadline</big>
            <input type="text" class="form-control" id="deadline" name="deadline" value="<?php echo $pot['deadline']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="another">another</label>
            <big>another</big>
            <textarea rows="8" class="form-control" id="another" name="another"><?php echo $pot['another']; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <big>Status</big>
            <div class="form-check">
                <select class="form-control" id="status" name="status">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
        <!-- <?php
            $status = isset($_POST['postStatus']) ? $_POST['postStatus'] : $post['status'];
        ?>
        <div class="control-group">
            <big>Status</big>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="postStatus" id="exampleRadios1" value="0" <?= $status == 0 ? 'checked' : ''; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Draft
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="postStatus" id="exampleRadios2" value="1" <?= $status == 1 ? 'checked' : ''; ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Active
                </label>
            </div>
        </div> -->
        
        <br>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </div>
        </form>
    </div>
    </div>
</div>

<hr>