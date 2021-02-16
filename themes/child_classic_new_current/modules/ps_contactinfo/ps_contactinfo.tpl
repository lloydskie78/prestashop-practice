<div class="block-contact col-md-3 links wrapper">
  <div class="hidden-sm-down">
    <p class="h4 text-uppercase block-contact-title">{l s='Contact Us' d='Shop.Theme.Global'}</p>
      {$contact_infos.address.formatted nofilter}
      {if $contact_infos.phone}
        <br>
        {* [1][/1] is for a HTML tag. *}
        {l s='Call us: [1]%phone%[/1]'
          sprintf=[
          '[1]' => '<span>',
          '[/1]' => '</span>',
          '%phone%' => $contact_infos.phone
          ]
          d='Shop.Theme.Global'
        }
      {/if}
      {if $contact_infos.fax}
        <br>
        {* [1][/1] is for a HTML tag. *}
        {l
          s='Fax: [1]%fax%[/1]'
          sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%fax%' => $contact_infos.fax
          ]
          d='Shop.Theme.Global'
        }
      {/if}
      {if $contact_infos.email}
        <br>
        {* [1][/1] is for a HTML tag. *}
        {l
          s='Email us: [1]%email%[/1]'
          sprintf=[
            '[1]' => '<a href="mailto:'|cat:$contact_infos.email|cat:'" class="dropdown">',
            '[/1]' => '</a>',
            '%email%' => $contact_infos.email
          ]
          d='Shop.Theme.Global'
        }
      {/if}
      <br>
       {l
          s='Follow us on:'
          d='Shop.Theme.Global'
        }
        <a href="https://www.facebook.com/CitiHardwarePH/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABPklEQVRIiWNgGAUEACMyxyloq/yf///nMjIw2jIwMLCRaNYvhv8Mh/6y/ks+str3EUyQCVkF1HBnMgxnYGBgYGNgZHBh/sM0B1kQxQKoyykF9sgcFgxXEAmMdIUZlBX4GFhZmBgu33jHcPn6e6xmoFtAFIgPU2VIjFCF8xesvI1sAQogywI/dzkGBgYGhkdPvzAcOfUSp+FkWyAkwM7AwMDAcPDYC4a5y2/hVcuEVxYN6GoKMkQFKjMwQhO3lroAQ1SgMoOmmgB1LDDWE2FIi1XH4EuKclLHgsvX3zMsW38Xzr9yA8K/evMDdSw4e+kNw6zFN+H8Mxch/JdvvlPHAnLAqAUkW/CLCmb+ROag5uT/DIcYGBlcCJngELQNn/QhZA6KD5iZGFIYGBh2M5Dnk18MDAy7/rL8SyFD70gGAJ0mV1/UqSEYAAAAAElFTkSuQmCC"/></a>
        <a href="https://www.instagram.com/citihardware/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAEZklEQVQ4T2WVXWwUVRTHz5m5M7PVpV/bbWkaSKmSxdYKBQSCqCFoeBDlAQvUaAKG1VqRBmICiT5gEEM0SIghkErwM6F29wFNRKUxKSqBPtCN2C4U04Iojd3tB5uWzte995id2W0LnuTmzJ2Z87vzP+fcOwieIeyv+0ZnVriZM3zKZUqDYFDONZVxpmSHKhgCZyg4U7hgyLmmpDjDhKviL0yoJ2KxOscnAcAnJd/XA7B2zrDWC9SUDGc4nA3mKnKhIedMzQIZ1xQmVM9XcIZFnCkgGCYdnW2Nxer/wA7o0KdKJhOC9FqOBW2K1A5FMxtvAJD/8dPmrZ0z/9nOFd0LKID7OIPXpKok7xQXNGA8dGCXIO2oJKOtaXz36/+HzAZnof783YXnH6GAss518AsZxMNcU6KCQSueDbXGBWibiAdqXsi8fyOfUz/QBxwLdwSz999Mb5nMAz+q6uziqvK0UOEtrulnORMDrq7EsausaYATCz0z+lXx/bB46cEoJ223ACMiQQcXjH6QxsevZl46ebz4u20c9G2gQvPO0fX9H877eZyrygheCq+bEKQNPTHyY2S23B9K3zgt0NgqSTcl6D0cDBCgLxVkFAjQ218Zb2ma/f6x4rPXuarOxSvl9aYAfbAhdbkuL/FC2YYoh0CbAKPblXrj+rHP/s4GnyndM48gEJNgrJSgRRvH3jnpQwlOFX2ZFKhV458Vc11JejKSurU4v+Ll8KqkAKMahBFZMXbOg+Xtp9Lt8wQG+wVoN58fPVKbz2l7yeErAvRFeLuSSSG0xPyUuSwb1BcOBxELMxKMi4+mkmvurbo/6wo1XhAYWKXgnKK16eNeob4N7e0RpC3Bf5eXSbJEorJ3fFlWcipMwSllTkZA4OJDw+lZwJmW6Q6vvSBBX2VBYdHadGwyu0hnaHuPAGMJjmxc6JLpJMPn/pqWPPQwS5JN1SC0SNWQnZPst1Fv5YL5JB64Jkm/uTjdU5tX8FtowxWJ+iIca1lugsUHS0/9XpfPR3q1EpUOtpFD3eKubKwaAA96uzIw35EFHQK0lQL0aGT4n1xREHrCj3t5x4mDz06Q5QwVHjifaxt/i41uwNNkw1ZpoUk2JchBIIsayIYCsrG9akg05bsi66+WL7guQZuLU5+/OEAWDz3YfCbX2DNluPOyukPatIdsiJANQJZyDWw6Er4kc1/mtwwB4K2K4LgEYwTdzh1xafFN0hQ1BZu/zh0KMwXIhqRaIAhphPIYeQW41xCG6wtrpCsHyHTiKPre3kU2PwqW28ZWH8sdDrOB+ev7/Qw2/VxNG1luFEynFanvPZ20qQQA1RLBp4rtHsLHjgzO7Gtf1ky+ZqVk35oauOvsI5tHyXL7Skyx1KsAXd1bTyq0A0Cu8zEDQCmyJQfL5cJ0OFkukO0yMrk/bKecLLeITBfIcpNoyy1zPujqnT41qW+/DtpUMwE+CQANAFAOACw/yJVAlgfmnjd5imyeAIv/amj8BG6Oe7+A/wD51Dowte8EbAAAAABJRU5ErkJggg=="/></a>
  </div>
  <div class="hidden-md-up">
    <div class="title">
      <a class="h3" href="{$urls.base_url}contact-us">{l s='Contact Us' d='Shop.Theme.Global'}</a>
    </div>
  </div>
</div>
