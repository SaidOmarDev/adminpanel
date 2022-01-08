<x-layout>
    <div class="card">
        <div class="card-header">
            Create project
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline">
                </div>
                <div class="form-group">
                    <label for="user" class="form-label">Assigned user</label>
                    <select class="form-control" name="user" id="user">
                        <option value="user_id">User_name</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="client" class="form-label">Assigned client</label>
                    <select class="form-control" name="client" id="client">
                        <option value="client_id">Client_name</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="status">Status</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
</x-layout>
