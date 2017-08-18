<!DOCTYPE html>
<html>
<head>
	<title>Comment Recieved</title>
</head>
<body>
	You have added new comment on <a href="{{ url('team/'. $team->id) }}">{{ $team->name }}</a>
</body>
</html>