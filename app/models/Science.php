<?php
class Science extends ModelBase{
	//获取所有科技
	public function dicGetAll(){
		$ret = $this->cache(__CLASS__, function() {
			$ret = $this->findList('id');
			foreach($ret as &$_r){
				if($_r['condition_science']){
					$_r['condition_science'] = explode(';', $_r['condition_science']);
				}else{
					$_r['condition_science'] = array();
				}
				if($_r['cost']){
					$_r['cost'] = explode(';', $_r['cost']);
					$_cost = array();
					foreach($_r['cost'] as $_c){
						list($_k, $_c) = explode(',', $_c);
						$_cost[$_k] = $_c;
					}
					$_r['cost'] = $_cost;
				}else{
					$_r['cost'] = array();
				}
			}
			unset($_r);
			return $ret;
		});
		return $ret;
	}
}