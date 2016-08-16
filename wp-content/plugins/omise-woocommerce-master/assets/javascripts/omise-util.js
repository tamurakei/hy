var OmiseUtil = new function(){
	var _validate_card = function(card){
		var errors = [];
		if(!card.name || card.name==""){
			errors.push("カード名義を入力してください");
		}
		
		if(!card.number || card.number==""){
			errors.push("カード番号を入力してください");
		}
		
		if(!card.expiration_month || card.expiration_month==""){
			errors.push("有効月を入力してください");
		}
		
		if(!card.expiration_year || card.expiration_year==""){
			errors.push("有効年を入力してください");
		}
		
		if(!card.security_code || card.security_code==""){
			errors.push("セキュリティコードを入力してください");
		}
		
		return errors;
	};
	
	return {
		validate_card: _validate_card
	}
}