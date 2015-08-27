<?php namespace Illuminate\Database\Schema;

class SqlServerBlueprint extends Blueprint {

	/**
	 * Create a new string column on the table.
	 *
	 * @param  string  $column
	 * @param  int  $length
	 * @return \Illuminate\Support\Fluent
	 */
	public function uniqueidentifier($column)
	{
		return $this->addColumn('uniqueidentifier', $column);
	}
}
