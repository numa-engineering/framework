<?php namespace Illuminate\Database\Schema;

class SqlServerBlueprint extends Blueprint {

	/**
	 * Create a new uniqueidentifier column on the table.
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
