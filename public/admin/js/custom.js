function getModal(url,text)
{
	$('#defaultModal').modal();
    $('.modal-title').text(text).css('font-weight', 'bold');
    $('.modal-body').load(url);
}