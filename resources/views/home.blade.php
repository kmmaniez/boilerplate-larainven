<p>hello world</p>

@can(['edit articles', 'delete articles', 'publish articles', 'unpublish articles'])
    <p>Super admin</p>
@elsecan(['publish articles','unpublish articles'])
    <p>Admin</p>
@elsecan('banned person')
    <p>satpam</p>
@else
    <p>writers</p>
@endcanany
<a href="/dashboard">dashboard</a>