<?php

namespace Sexport\Utilities\ForeignKey;

class ForeignKey
{
    /**
     * The column on which to create the foreign key.
     *
     * @var string
     */
    public $column;

    /**
     * The referenced column in the foreign table.
     *
     * @var string
     */
    public $references = 'id';

    /**
     * The referenced table.
     *
     * @var string
     */
    public $on;

    /**
     * The referential action to execute when the referenced column is updated.
     *
     * @var string
     */
    public $onUpdate = 'cascade';

    /**
     * The referential action to execute when the referenced column is deleted.
     *
     * @var string
     */
    public $onDelete = 'restrict';

    /**
     * Create a new foreign key instance.
     *
     * @param  array  $options
     * @return self
     */
    public function __construct(array $options)
    {
        $this->validateOptions($options);

        foreach ($options as $option => $value) {
            if (property_exists($this, $option)) {
                $this->{$option} = $value;
            }
        }

        if ( ! $this->on) {
            $this->on = $this->makeTableName($this->column);
        }
    }

    /**
     * Validate the foreign key options.
     *
     * @param  array  $options
     * @return void
     * @throws \InvalidArgumentException
     */
    private function validateOptions(array $options)
    {
        if (! isset($options['column'])) {
            throw new \InvalidArgumentException('Missing required option: column');
        }
    }

    /**
     * Make a table name from the given column name.
     *
     * @param  string  $column
     * @return string
     */
    private function makeTableName($column)
    {
        $column = is_array($column) ? current($column) : $column;

        return str_plural(str_replace('_id', '', $column));
    }
}
