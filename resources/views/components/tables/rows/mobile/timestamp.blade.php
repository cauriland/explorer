<div>
    @lang('labels.timestamp')

    <div>
        <x-cauri-local-time
            :datetime="$model->dateTime()"
            :format="DateFormat::TIME_JS"
            :placeholder="$model->timestamp()"
        />
    </div>
</div>
