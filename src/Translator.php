<?php



namespace Yljphp\Validation;

/**
 * 验证类使用的默认消息翻译工具.
 */
class Translator implements TranslatorInterface
{
    protected $messages = [];

    /**
     * 默认消息.
     *
     * @var array
     */
    protected $defaultMessages = [
        'accepted'             => ':attribute 必须接受。',
        'active_url'           => ':attribute 不是一个有效的网址。',
        'after'                => ':attribute 必须要晚于 :date。',
        'after_or_equal'       => ':attribute 必须要等于 :date 或更晚。',
        'alpha'                => ':attribute 只能由字母组成。',
        'alpha_dash'           => ':attribute 只能由字母、数字和斜杠组成。',
        'alpha_num'            => ':attribute 只能由字母和数字组成。',
        'array'                => ':attribute 必须是一个数组。',
        'before'               => ':attribute 必须要早于 :date。',
        'before_or_equal'      => ':attribute 必须要等于 :date 或更早。',
        'between'              => [
            'numeric' => ':attribute 必须介于 :min - :max 之间。',
            'file'    => ':attribute 必须介于 :min - :max KB 之间。',
            'string'  => ':attribute 必须介于 :min - :max 个字符之间。',
            'array'   => ':attribute 必须只有 :min - :max 个单元。',
        ],
        'boolean'              => ':attribute 必须为布尔值。',
        'confirmed'            => ':attribute 两次输入不一致。',
        'date'                 => ':attribute 不是一个有效的日期。',
        'date_format'          => ':attribute 的格式必须为 :format。',
        'different'            => ':attribute 和 :other 必须不同。',
        'digits'               => ':attribute 必须是 :digits 位的数字。',
        'digits_between'       => ':attribute 必须是介于 :min 和 :max 位的数字。',
        'dimensions'           => ':attribute 图片尺寸不正确。',
        'distinct'             => ':attribute 已经存在。',
        'email'                => ':attribute 不是一个合法的邮箱。',
        'exists'               => ':attribute 不存在。',
        'file'                 => ':attribute 必须是文件。',
        'filled'               => ':attribute 不能为空。',
        'gt'                   => [
            'numeric' => ':attribute 必须大于 :value。',
            'file'    => ':attribute 必须大于 :value KB。',
            'string'  => ':attribute 必须多于 :value 个字符。',
            'array'   => ':attribute 必须多于 :value 个元素。',
        ],
        'gte'                  => [
            'numeric' => ':attribute 必须大于或等于 :value。',
            'file'    => ':attribute 必须大于或等于 :value KB。',
            'string'  => ':attribute 必须多于或等于 :value 个字符。',
            'array'   => ':attribute 必须多于或等于 :value 个元素。',
        ],
        'image'                => ':attribute 必须是图片。',
        'in'                   => '已选的属性 :attribute 非法。',
        'in_array'             => ':attribute 没有在 :other 中。',
        'integer'              => ':attribute 必须是整数。',
        'ip'                   => ':attribute 必须是有效的 IP 地址。',
        'ipv4'                 => ':attribute 必须是有效的 IPv4 地址。',
        'ipv6'                 => ':attribute 必须是有效的 IPv6 地址。',
        'json'                 => ':attribute 必须是正确的 JSON 格式。',
        'lt'                   => [
            'numeric' => ':attribute 必须小于 :value。',
            'file'    => ':attribute 必须小于 :value KB。',
            'string'  => ':attribute 必须少于 :value 个字符。',
            'array'   => ':attribute 必须少于 :value 个元素。',
        ],
        'lte'                  => [
            'numeric' => ':attribute 必须小于或等于 :value。',
            'file'    => ':attribute 必须小于或等于 :value KB。',
            'string'  => ':attribute 必须少于或等于 :value 个字符。',
            'array'   => ':attribute 必须少于或等于 :value 个元素。',
        ],
        'max'                  => [
            'numeric' => ':attribute 不能大于 :max。',
            'file'    => ':attribute 不能大于 :max KB。',
            'string'  => ':attribute 不能大于 :max 个字符。',
            'array'   => ':attribute 最多只有 :max 个单元。',
        ],
        'mimes'                => ':attribute 必须是一个 :values 类型的文件。',
        'mimetypes'            => ':attribute 必须是一个 :values 类型的文件。',
        'min'                  => [
            'numeric' => ':attribute 必须大于等于 :min。',
            'file'    => ':attribute 大小不能小于 :min KB。',
            'string'  => ':attribute 至少为 :min 个字符。',
            'array'   => ':attribute 至少有 :min 个单元。',
        ],
        'not_in'               => '已选的属性 :attribute 非法。',
        'not_regex'            => ':attribute 的格式错误。',
        'numeric'              => ':attribute 必须是一个数字。',
        'present'              => ':attribute 必须存在。',
        'regex'                => ':attribute 格式不正确。',
        'required'             => ':attribute 不能为空。',
        'required_if'          => '当 :other 为 :value 时 :attribute 不能为空。',
        'required_unless'      => '当 :other 不为 :value 时 :attribute 不能为空。',
        'required_with'        => '当 :values 存在时 :attribute 不能为空。',
        'required_with_all'    => '当 :values 存在时 :attribute 不能为空。',
        'required_without'     => '当 :values 不存在时 :attribute 不能为空。',
        'required_without_all' => '当 :values 都不存在时 :attribute 不能为空。',
        'same'                 => ':attribute 和 :other 必须相同。',
        'size'                 => [
            'numeric' => ':attribute 大小必须为 :size。',
            'file'    => ':attribute 大小必须为 :size KB。',
            'string'  => ':attribute 必须是 :size 个字符。',
            'array'   => ':attribute 必须为 :size 个单元。',
        ],
        'string'               => ':attribute 必须是一个字符串。',
        'timezone'             => ':attribute 必须是一个合法的时区值。',
        'unique'               => ':attribute 已经存在。',
        'uploaded'             => ':attribute 上传失败。',
        'url'                  => ':attribute 格式不正确。',
    ];

    /**
     * 设置验证消息列表.
     *
     * @param $messages
     */
    public function __construct(array $messages = [])
    {
        $this->messages = ['validation' => array_merge($this->defaultMessages, $messages)];
    }

    /**
     * 翻译.
     *
     * @param string $key 点拼接的key
     *
     * @return string
     */
    public function trans($key)
    {
        return $this->arrayGet($this->messages, $key, $key);
    }

    /**
     * 使用点字符串获取.
     *
     * @param array  $array
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    protected function arrayGet($array, $key, $default = null)
    {
        if (is_null($key)) {
            return $array;
        }

        if (isset($array[$key])) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $segment) {
            if (!is_array($array) || !array_key_exists($segment, $array)) {
                return value($default);
            }

            $array = $array[$segment];
        }

        return $array;
    }
}
