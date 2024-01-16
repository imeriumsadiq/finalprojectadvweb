<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Registration</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Project Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="system_owner">{{ __('System Owner (BU name)') }}</label>
                            <input id="system_owner" type="text" class="form-control" name="system_owner" required>
                        </div>

                        <div class="form-group">
                            <label for="system_pic">{{ __('System PIC') }}</label>
                            <input id="system_pic" type="text" class="form-control" name="system_pic" required>
                        </div>

                        <div class="form-group">
                            <label for="start_date">{{ __('Project Start Date') }}</label>
                            <input id="start_date" type="date" class="form-control" name="start_date" required>
                        </div>

                        <div class="form-group">
                            <label for="duration">{{ __('Project Duration (in days)') }}</label>
                            <input id="duration" type="number" class="form-control" name="duration" required>
                        </div>

                        <div class="form-group">
                            <label for="end_date">{{ __('Project End Date') }}</label>
                            <input id="end_date" type="date" class="form-control" name="end_date" required>
                        </div>

                        <div class="form-group">
                            <label for="project_status">{{ __('Project Status') }}</label>
                            <select id="project_status" name="project_status">
                                <option value="ahead of schedule">Ahead of schedule</option>
                                <option value="on schedule">On schedule</option>
                                <option value="delayed">Delayed</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="lead_developer">{{ __('Lead Developer') }}</label>
                            <input id="lead_developer" type="text" class="form-control" name="lead_developer" required>
                        </div>

                        <div class="form-group">
                            <label for="developers">{{ __('Developers') }}</label>
                            <input id="developers" type="text" class="form-control" name="developers" required>
                        </div>

                        <div class="form-group">
                            <label for="development methodology">{{ __('Development Methodology') }}</label>
                            <input id="development methodology" type="text" class="form-control" name="development methodology" required>
                        </div>

                        <div class="form-group">
                            <label for="system platform">{{ __('system platform') }}</label>
                            <select id="system platform" name="system platform">
                                <option value="Web-based">Web-Based</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Stand-alone">Stand-Alone</option>
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
